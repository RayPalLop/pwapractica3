<?php
// Arreglo de productos con datos completos
$productos = [
    [
        'id' => 1,
        'nombre' => 'Laptop HP Pavilion',
        'descripcion' => 'Laptop de alto rendimiento con procesador Intel Core i7, 16GB RAM y 512GB SSD. Ideal para trabajo y entretenimiento.',
        'precio' => 899.99,
        'imagen' => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=300&h=200&fit=crop'
    ],
    [
        'id' => 2,
        'nombre' => 'Smartphone Samsung Galaxy',
        'descripcion' => 'Teléfono inteligente con cámara de 108MP, pantalla AMOLED de 6.8" y batería de larga duración.',
        'precio' => 649.99,
        'imagen' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=300&h=200&fit=crop'
    ],
    [
        'id' => 3,
        'nombre' => 'Auriculares Sony WH-1000XM4',
        'descripcion' => 'Auriculares inalámbricos con cancelación de ruido activa y calidad de sonido superior.',
        'precio' => 349.99,
        'imagen' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=300&h=200&fit=crop'
    ],
    [
        'id' => 4,
        'nombre' => 'Tablet iPad Air',
        'descripcion' => 'Tablet con chip M1, pantalla Liquid Retina de 10.9" y compatibilidad con Apple Pencil.',
        'precio' => 599.99,
        'imagen' => 'https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?w=300&h=200&fit=crop'
    ],
    [
        'id' => 5,
        'nombre' => 'Smartwatch Apple Watch',
        'descripcion' => 'Reloj inteligente con monitoreo de salud, GPS y resistencia al agua.',
        'precio' => 399.99,
        'imagen' => 'https://images.unsplash.com/photo-1434494878577-86c23bcb06b9?w=300&h=200&fit=crop'
    ],
    [
        'id' => 6,
        'nombre' => 'Cámara Canon EOS R6',
        'descripcion' => 'Cámara mirrorless profesional con sensor full-frame y grabación de video 4K.',
        'precio' => 2499.99,
        'imagen' => 'https://images.unsplash.com/photo-1502920917128-1aa500764cbd?w=300&h=200&fit=crop'
    ],
    [
        'id' => 7,
        'nombre' => 'Teclado Mecánico Logitech G Pro',
        'descripcion' => 'Teclado gaming profesional con switches mecánicos y RGB.',
        'precio' => 129.99,
        'imagen' => 'https://images.unsplash.com/photo-1551385051-0a0c931fbd3e?w=300&h=200&fit=crop' // Teclado gaming real
    ],
    [
        'id' => 8,
        'nombre' => 'Monitor Samsung Odyssey G7',
        'descripcion' => 'Monitor curvo QHD 240Hz para gaming competitivo.',
        'precio' => 699.99,
        'imagen' => 'https://images.unsplash.com/photo-1546538915-a9e2c8d0a8da?w=300&h=200&fit=crop' // Monitor gaming curvo
    ],
    [
        'id' => 9,
        'nombre' => 'Altavoz JBL Charge 5',
        'descripcion' => 'Altavoz Bluetooth resistente al agua con bass radiante.',
        'precio' => 179.99,
        'imagen' => 'https://images.unsplash.com/photo-1572569511254-d8f925fe2cbb?w=300&h=200&fit=crop' // JBL Charge real
    ],
    [
        'id' => 10,
        'nombre' => 'WD My Passport 2TB',
        'descripcion' => 'Disco duro externo portable con cifrado de hardware.',
        'precio' => 89.99,
        'imagen' => 'https://images.unsplash.com/photo-1597852074816-d933c7d2b988?w=300&h=200&fit=crop' // Disco WD real
    ]

];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStore - Carrito de Compras</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg,rgb(59, 63, 82) 0%, #764ba2 100%);
            min-height: 100vh;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 40px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 30px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        h1 {
            color: white;
            font-size: 2.5em;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .subtitle {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.2em;
            font-weight: 300;
        }

        .cart-summary {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: sticky;
            top: 20px;
            z-index: 100;
        }

        .cart-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .cart-count {
            background: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: bold;
            font-size: 1.1em;
        }

        .cart-total {
            background: #2196F3;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: bold;
            font-size: 1.1em;
        }

        .view-cart-btn {
            background: #FF9800;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: bold;
            font-size: 1em;
            transition: all 0.3s ease;
        }

        .view-cart-btn:hover {
            background: #F57C00;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 152, 0, 0.4);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .product-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 15px;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .product-card:hover .product-image {
            transform: scale(1.05);
        }

        .product-name {
            font-size: 1.4em;
            font-weight: bold;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .product-description {
            color: #666;
            margin-bottom: 15px;
            line-height: 1.6;
            font-size: 0.95em;
        }

        .product-price {
            font-size: 1.6em;
            font-weight: bold;
            color: #27ae60;
            margin-bottom: 20px;
        }

        .add-to-cart-btn {
            background: linear-gradient(45deg, #FF6B6B, #4ECDC4);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 50px;
            cursor: pointer;
            font-weight: bold;
            font-size: 1.1em;
            width: 100%;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .add-to-cart-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(255, 107, 107, 0.4);
        }

        .add-to-cart-btn:active {
            transform: translateY(0);
        }

        .cart-modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
        }

        .modal-content {
            background-color: white;
            margin: 5% auto;
            padding: 30px;
            border-radius: 20px;
            width: 90%;
            max-width: 800px;
            max-height: 80vh;
            overflow-y: auto;
            position: relative;
            animation: slideIn 0.3s ease;
        }

        @keyframes slideIn {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .close:hover {
            color: #000;
        }

        .cart-item {
            display: flex;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid #eee;
            gap: 20px;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 10px;
        }

        .cart-item-info {
            flex: 1;
        }

        .cart-item-name {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .cart-item-price {
            color: #27ae60;
            font-weight: bold;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 10px 0;
        }

        .quantity-btn {
            background: #3498db;
            color: white;
            border: none;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            font-weight: bold;
        }

        .quantity-btn:hover {
            background: #2980b9;
        }

        .remove-btn {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 0.9em;
        }

        .remove-btn:hover {
            background: #c0392b;
        }

        .empty-cart {
            text-align: center;
            padding: 40px;
            color: #666;
        }

        .checkout-section {
            margin-top: 30px;
            padding-top: 30px;
            border-top: 2px solid #eee;
            text-align: center;
        }

        .checkout-btn {
            background: linear-gradient(45deg, #2ecc71, #27ae60);
            color: white;
            border: none;
            padding: 15px 40px;
            border-radius: 50px;
            cursor: pointer;
            font-weight: bold;
            font-size: 1.2em;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .checkout-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(46, 204, 113, 0.4);
        }

        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background: #2ecc71;
            color: white;
            padding: 15px 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            z-index: 1001;
            opacity: 0;
            transform: translateX(100%);
            transition: all 0.3s ease;
        }

        .notification.show {
            opacity: 1;
            transform: translateX(0);
        }

        @media (max-width: 768px) {
            .products-grid {
                grid-template-columns: 1fr;
            }
            
            .cart-info {
                flex-direction: column;
                gap: 10px;
            }
            
            .modal-content {
                margin: 10% auto;
                padding: 20px;
            }
            
            .cart-item {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>🛒 TechStore</h1>
            <p class="subtitle">Encuentra los mejores productos tecnológicos</p>
        </header>

        <div class="cart-summary">
            <div class="cart-info">
                <div class="cart-count">
                    Productos en carrito: <span id="cart-count">0</span>
                </div>
                <div class="cart-total">
                    Total: $<span id="cart-total">0.00</span>
                </div>
                <button class="view-cart-btn" onclick="openCart()">Ver Carrito</button>
            </div>
        </div>

        <div class="products-grid">
            <?php foreach ($productos as $producto): ?>
            <div class="product-card">
                <img src="<?php echo $producto['imagen']; ?>" 
                     alt="<?php echo htmlspecialchars($producto['nombre']); ?>" 
                     class="product-image">
                
                <h3 class="product-name"><?php echo htmlspecialchars($producto['nombre']); ?></h3>
                
                <p class="product-description"><?php echo htmlspecialchars($producto['descripcion']); ?></p>
                
                <div class="product-price">$<?php echo number_format($producto['precio'], 2); ?></div>
                
                <button class="add-to-cart-btn" onclick="addToCart(<?php echo $producto['id']; ?>, '<?php echo htmlspecialchars($producto['nombre']); ?>', <?php echo $producto['precio']; ?>, '<?php echo $producto['imagen']; ?>')">
                    🛒 Agregar al Carrito
                </button>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Modal del Carrito -->
    <div id="cartModal" class="cart-modal">
        <div class="modal-content">
            <span class="close" onclick="closeCart()">&times;</span>
            <h2>🛒 Carrito de Compras</h2>
            <div id="cart-items"></div>
            <div class="checkout-section">
                <h3>Total: $<span id="modal-total">0.00</span></h3>
                <button class="checkout-btn" onclick="checkout()">Proceder al Pago</button>
            </div>
        </div>
    </div>

    <!-- Notificación -->
    <div id="notification" class="notification"></div>

    <script>
        // Array para almacenar los productos del carrito
        let cart = [];

        // Función para agregar productos al carrito
        function addToCart(id, name, price, image) {
            const existingItem = cart.find(item => item.id === id);
            
            if (existingItem) {
                existingItem.quantity++;
            } else {
                cart.push({
                    id: id,
                    name: name,
                    price: price,
                    image: image,
                    quantity: 1
                });
            }
            
            updateCartDisplay();
            showNotification(`${name} agregado al carrito!`);
        }

        // Función para actualizar la visualización del carrito
        function updateCartDisplay() {
            const cartCount = cart.reduce((total, item) => total + item.quantity, 0);
            const cartTotal = cart.reduce((total, item) => total + (item.price * item.quantity), 0);
            
            document.getElementById('cart-count').textContent = cartCount;
            document.getElementById('cart-total').textContent = cartTotal.toFixed(2);
            document.getElementById('modal-total').textContent = cartTotal.toFixed(2);
        }

        // Función para mostrar el carrito
        function openCart() {
            const modal = document.getElementById('cartModal');
            const cartItemsContainer = document.getElementById('cart-items');
            
            if (cart.length === 0) {
                cartItemsContainer.innerHTML = '<div class="empty-cart"><h3>Tu carrito está vacío</h3><p>¡Agrega algunos productos increíbles!</p></div>';
            } else {
                cartItemsContainer.innerHTML = cart.map(item => `
                    <div class="cart-item">
                        <img src="${item.image}" alt="${item.name}">
                        <div class="cart-item-info">
                            <div class="cart-item-name">${item.name}</div>
                            <div class="cart-item-price">$${item.price.toFixed(2)}</div>
                            <div class="quantity-controls">
                                <button class="quantity-btn" onclick="changeQuantity(${item.id}, -1)">-</button>
                                <span>Cantidad: ${item.quantity}</span>
                                <button class="quantity-btn" onclick="changeQuantity(${item.id}, 1)">+</button>
                            </div>
                            <div>Subtotal: $${(item.price * item.quantity).toFixed(2)}</div>
                        </div>
                        <button class="remove-btn" onclick="removeFromCart(${item.id})">Eliminar</button>
                    </div>
                `).join('');
            }
            
            modal.style.display = 'block';
        }

        // Función para cerrar el carrito
        function closeCart() {
            document.getElementById('cartModal').style.display = 'none';
        }

        // Función para cambiar cantidad
        function changeQuantity(id, change) {
            const item = cart.find(item => item.id === id);
            if (item) {
                item.quantity += change;
                if (item.quantity <= 0) {
                    removeFromCart(id);
                } else {
                    updateCartDisplay();
                    openCart(); // Refresh cart display
                }
            }
        }

        // Función para eliminar del carrito
        function removeFromCart(id) {
            cart = cart.filter(item => item.id !== id);
            updateCartDisplay();
            openCart(); // Refresh cart display
            showNotification('Producto eliminado del carrito');
        }

        // Función para procesar el pago
        function checkout() {
            if (cart.length === 0) {
                showNotification('Tu carrito está vacío', 'error');
                return;
            }
            
            const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const itemCount = cart.reduce((sum, item) => sum + item.quantity, 0);
            
            showNotification(`¡Compra realizada! ${itemCount} productos por $${total.toFixed(2)}`, 'success');
            
            // Limpiar carrito
            cart = [];
            updateCartDisplay();
            closeCart();
        }

        // Función para mostrar notificaciones
        function showNotification(message, type = 'success') {
            const notification = document.getElementById('notification');
            notification.textContent = message;
            notification.className = `notification ${type}`;
            notification.classList.add('show');
            
            setTimeout(() => {
                notification.classList.remove('show');
            }, 3000);
        }

        // Cerrar modal al hacer clic fuera de él
        window.onclick = function(event) {
            const modal = document.getElementById('cartModal');
            if (event.target === modal) {
                closeCart();
            }
        }

        // Inicializar la visualización del carrito
        updateCartDisplay();
    </script>
</body>
</html>