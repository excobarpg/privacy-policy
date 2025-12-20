// E-ticaret Sepet Sistemi
class ShoppingCart {
    constructor() {
        this.items = JSON.parse(localStorage.getItem('cart')) || [];
        this.init();
    }

    init() {
        console.log('Sepet sistemi başlatılıyor...');
        this.updateCartCount();
        this.bindEvents();
        console.log('Sepet sistemi hazır!');
    }

    bindEvents() {
        // Sepete ekle butonları
        document.addEventListener('click', (e) => {
            // Sepete ekle butonu
            if (e.target.classList.contains('add-to-cart') || e.target.closest('.add-to-cart')) {
                e.preventDefault();
                console.log('Sepete ekle butonuna tıklandı');
                const button = e.target.classList.contains('add-to-cart') ? e.target : e.target.closest('.add-to-cart');
                this.addToCart(button);
            }
            
            // Sepetten kaldır butonu
            if (e.target.classList.contains('remove-from-cart')) {
                e.preventDefault();
                this.removeFromCart(e.target.dataset.productId);
            }
            
            // Sepet toggle - hem ikona hem div'e tıklamayı destekle
            if (e.target.classList.contains('cart-toggle') || 
                e.target.classList.contains('cart-icon') || 
                e.target.closest('.cart-toggle')) {
                e.preventDefault();
                console.log('Sepet ikonuna tıklandı');
                this.toggleCart();
            }
        });

        // Varyant değişikliği
        document.addEventListener('change', (e) => {
            if (e.target.classList.contains('product-variant')) {
                this.updateProductPrice(e.target);
            }
        });
    }

    addToCart(button) {
        console.log('addToCart fonksiyonu çalışıyor');
        const productCard = button.closest('.pricing-card');
        const productId = button.dataset.productId;
        const productName = button.dataset.productName;
        const variantSelect = productCard.querySelector('.product-variant');
        const variant = variantSelect ? variantSelect.value : 'lifetime';
        const priceElement = productCard.querySelector('.price');
        
        if (!priceElement) {
            console.error('Fiyat elementi bulunamadı!', productCard);
            return;
        }
        
        const price = parseFloat(priceElement.dataset.price);
        const currency = priceElement.dataset.currency || 'USD';

        console.log('Ürün bilgileri:', { productId, productName, variant, price, currency });

        if (isNaN(price)) {
            console.error('Geçersiz fiyat!', priceElement.dataset.price);
            return;
        }

        const existingItem = this.items.find(item => 
            item.id === productId && item.variant === variant
        );

        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            this.items.push({
                id: productId,
                name: productName,
                variant: variant,
                price: price,
                currency: currency,
                quantity: 1
            });
        }

        this.saveCart();
        this.updateCartCount();
        this.showCartNotification(`${productName} sepete eklendi!`);
        console.log('Sepet güncellendi:', this.items);
    }

    removeFromCart(productId) {
        this.items = this.items.filter(item => item.id !== productId);
        this.saveCart();
        this.updateCartCount();
        this.renderCartItems();
    }

    updateProductPrice(select) {
        console.log('Varyant değiştirildi:', select.value);
        const productCard = select.closest('.pricing-card');
        const priceElement = productCard.querySelector('.price');
        const selectedOption = select.options[select.selectedIndex];
        
        console.log('Seçilen option:', selectedOption);
        console.log('Fiyat elementi:', priceElement);
        
        if (priceElement && selectedOption) {
            priceElement.textContent = selectedOption.dataset.price;
            priceElement.dataset.price = selectedOption.dataset.priceValue;
            priceElement.dataset.currency = selectedOption.dataset.currency;
            console.log('Fiyat güncellendi:', selectedOption.dataset.price);
        } else {
            console.error('Fiyat elementi veya seçilen option bulunamadı!');
        }
    }

    saveCart() {
        localStorage.setItem('cart', JSON.stringify(this.items));
    }

    updateCartCount() {
        const cartCount = document.querySelector('.cart-count');
        if (cartCount) {
            const totalItems = this.items.reduce((sum, item) => sum + item.quantity, 0);
            cartCount.textContent = totalItems;
            if (totalItems > 0) {
                cartCount.classList.add('show');
                cartCount.style.display = 'flex';
            } else {
                cartCount.classList.remove('show');
                cartCount.style.display = 'none';
            }
            console.log('Sepet sayısı güncellendi:', totalItems);
        } else {
            console.error('cart-count elementi bulunamadı!');
        }
    }

    toggleCart() {
        console.log('toggleCart fonksiyonu çalışıyor');
        let cartSidebar = document.querySelector('.cart-sidebar');
        if (!cartSidebar) {
            console.log('Sepet sidebar oluşturuluyor');
            this.createCartSidebar();
            cartSidebar = document.querySelector('.cart-sidebar');
        }
        
        cartSidebar.classList.toggle('active');
        const overlay = document.querySelector('.cart-overlay');
        if (overlay) {
            overlay.style.opacity = cartSidebar.classList.contains('active') ? '1' : '0';
            overlay.style.visibility = cartSidebar.classList.contains('active') ? 'visible' : 'hidden';
        }
        
        this.renderCartItems();
    }

    createCartSidebar() {
        const cartHTML = `
            <div class="cart-sidebar">
                <div class="cart-header">
                    <h3>Sepetim</h3>
                    <button class="cart-close">&times;</button>
                </div>
                <div class="cart-items"></div>
                <div class="cart-footer">
                    <div class="cart-total">
                        <strong>Toplam: <span class="total-amount">₺0</span></strong>
                    </div>
                    <button class="checkout-btn">Ödemeye Geç</button>
                </div>
            </div>
            <div class="cart-overlay"></div>
        `;
        
        document.body.insertAdjacentHTML('beforeend', cartHTML);
        
        // Close events
        document.querySelector('.cart-close').addEventListener('click', () => {
            document.querySelector('.cart-sidebar').classList.remove('active');
            document.querySelector('.cart-overlay').style.opacity = '0';
            document.querySelector('.cart-overlay').style.visibility = 'hidden';
        });
        
        document.querySelector('.cart-overlay').addEventListener('click', () => {
            document.querySelector('.cart-sidebar').classList.remove('active');
            document.querySelector('.cart-overlay').style.opacity = '0';
            document.querySelector('.cart-overlay').style.visibility = 'hidden';
        });
        
        document.querySelector('.checkout-btn').addEventListener('click', () => {
            this.goToCheckout();
        });
    }

    renderCartItems() {
        const cartItemsContainer = document.querySelector('.cart-items');
        if (!cartItemsContainer) return;

        if (this.items.length === 0) {
            cartItemsContainer.innerHTML = '<p class="empty-cart">Sepetiniz boş</p>';
            const totalElement = document.querySelector('.total-amount');
            if (totalElement) totalElement.textContent = '₺0';
            return;
        }

        let cartHTML = '';
        let total = 0;

        this.items.forEach(item => {
            const itemTotal = item.price * item.quantity;
            total += itemTotal;
            
            cartHTML += `
                <div class="cart-item">
                    <div class="item-info">
                        <h4>${item.name}</h4>
                        <p class="item-variant">${this.getVariantName(item.variant)}</p>
                        <p class="item-price">₺${item.price}</p>
                    </div>
                    <div class="item-controls">
                        <span class="quantity">Adet: ${item.quantity}</span>
                        <button class="remove-from-cart" data-product-id="${item.id}">Kaldır</button>
                    </div>
                </div>
            `;
        });

        cartItemsContainer.innerHTML = cartHTML;
        const totalElement = document.querySelector('.total-amount');
        if (totalElement) {
            totalElement.textContent = `₺${total.toLocaleString('tr-TR')}`;
        }
    }

    getVariantName(variant) {
        const variants = {
            'lifetime': 'Ömür Boyu Lisans',
            'monthly-1': '1 Aylık Lisans',
            'monthly-3': '3 Aylık Lisans',
            'monthly-6': '6 Aylık Lisans'
        };
        return variants[variant] || variant;
    }

    goToCheckout() {
        if (this.items.length === 0) {
            alert('Sepetiniz boş!');
            return;
        }
        
        // Checkout sayfasına yönlendir
        window.location.href = 'checkout.html';
    }

    showCartNotification(message) {
        // Mevcut bildirimi kaldır
        const existingNotification = document.querySelector('.cart-notification');
        if (existingNotification) {
            existingNotification.remove();
        }

        // Yeni bildirim oluştur
        const notification = document.createElement('div');
        notification.className = 'cart-notification';
        notification.textContent = message;
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.classList.add('show');
        }, 100);
        
        setTimeout(() => {
            notification.classList.remove('show');
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.parentNode.removeChild(notification);
                }
            }, 300);
        }, 3000);
    }
}

// Sayfa yüklendiğinde sepeti başlat
document.addEventListener('DOMContentLoaded', () => {
    console.log('DOM yüklendi, sepet başlatılıyor...');
    window.cart = new ShoppingCart();
});