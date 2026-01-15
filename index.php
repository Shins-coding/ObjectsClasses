<?php
include 'includes/header.php';
include 'class/Account.php';
include 'class/Costumer.php';

$customer = new Customer('Franhin', 'Mendoza', 'franshinmendoza', '+63 917 123 4567');



$savings = new Account('20622745', 'Savings Account', 24999.99);           
$checking = new Account('20982183', 'Checking Account', 1567.25);        
$payroll = new Account('24233543', 'Payroll Account', 12500.50);          
$deposits = new Account('23242694', 'Certificate of Deposits', 75000.75); 

$customer->addAccount($savings);
$customer->addAccount($checking);
$customer->addAccount($payroll);
$customer->addAccount($deposits);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shin Bank</title>

</head>
<body>
    <div class="bank-container">
        <div class="bank-header">
            <h1 class="bank-title">OUR<span style="color:#8b5cf6;">BANK</span></h1>
        </div>
        
        <div class="customer-section">
            <h2 class="customer-name">Name: Franshin Mendoza</h2>
            
            <table class="accounts-table">
                <thead>
                    <tr>
                        <th>Account Number</th>
                        <th>Account Type</th>
                        <th>Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($customer->accounts as $account): ?>
                    <tr>
                        <td class="account-number"><?php echo $account->getAccountNumber(); ?></td>
                        <td class="account-type"><?php echo $account->getAccountType(); ?></td>
                        <td class="balance">
                            <span class="currency">₱</span>
                            <?php echo number_format($account->getBalance(), 2); ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>
</body>
</html>
