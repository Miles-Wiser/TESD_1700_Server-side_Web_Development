function add_to_cart(form) {
    // Stop script no quantity is selected
    if (form.qty.value <= 0) {
        return false;
    }

    const sku = form.sku.value;
    const qty = form.qty.value;
    const product_name =form.product_name.value;
    const price = form.price.value;

    const sku_info = {
        qty: qty,
        product_name: product_name,
        price: price
    }

    localStorage.setItem(sku, JSON.stringify(sku_info));

    // Send form info to $_POST
    const formData = new FormData(form);
    fetch('process_cart.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        console.log(data);
        
    })
    .catch(err=> console.error(err));

    // Let user know item was added
    alert("Added to cart");

    return false;
}

function read_cart() {
    const tax = 0.06235;
    let grandTotal = 0;

    let tableHTML = `<table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
    `


    // Loop through localStorage key/value pairs
    for (let i = 0; i < localStorage.length; i++) {
        const sku = localStorage.key(i);
        const item = JSON.parse(localStorage.getItem(sku));

        // Check for 6 digit sku; WARNING: any 6 digit key will pass!
        if (sku.match(/^\d{6}$/)) {
            grandTotal += item.qty * item.price;
            tableHTML += `
                <tr>
                    <td>${item.product_name}</td>
                    <td>${item.qty}</td>
                    <td>$${item.price.toLocaleString(undefined, {minimumFractionDigits:2})}</td>
                    <td>$${(item.qty * item.price).toLocaleString(undefined, {minimumFractionDigits:2})}</td>
                </tr>
            `;
        }
    }

    tableHTML += `</tbody>
        <tfoot>
            <tr>
                <td colspan='2'></td>
                <td>Sales Tax</td>
                <td>${tax * 100}%</td>
            </tr>
            <tr>
                <td colspan='2'></td>
                <td>Total</td>
                <td>$${(grandTotal * (1 + tax).toLocaleString(undefined, {minimumFractionDigits:2}))}</td>
            </tr>
        </tfoot>
    </table>
    
    <button type="button" onclick="clear_cart(); location.href='process_cart.php';">Order</button>
    `;

    // Empty cart display
    if (grandTotal == 0) {
        return `
        <div id="empty_cart">
        <p>Your cart is empty <a href='catalog.php' id='shop_now'>Shop</a> now.</p>
        </div>
        `
    }
    return tableHTML;
}

function print_cart() {
    document.getElementById("table-container").insertAdjacentHTML("afterbegin", read_cart());
}

function clear_cart() {
    localStorage.clear();
}