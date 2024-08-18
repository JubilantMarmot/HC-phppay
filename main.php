<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHPPay</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div id="top-bar">Marketplace Demo</div>
    <p>Welcome to my Monero marketplace! Please select an item to purchase:</p>

    <div id="items-container"></div>

    <form id="order-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="hidden" name="orderId" placeholder="Order ID" required>
    </form>

    <div id="modal">
        <div>
            <button id="modal-close" onclick="modal.style.display = 'none';" style="float: right;">X</button>

            <h2 id="modal-title">Payment Details</h2>
            <p id="modal-prompt">Please send the specified amount to the following address:</p>
            <p><b id="modal-label">Address:</b> <span id="modal-formatted"></span></p>
            <p><b>Amount:</b> <span id="modal-amount"></span> XMR</p>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input type="hidden" name="orderId" value="">
                <input type="submit" value="I have sent the payment">
            </form>
        </div>
    </div>
</body>
</html>
