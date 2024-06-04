<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Reservation</title>
</head>
<body>
    <h2>Create Reservation</h2>
    <form action="<?php echo base_url('reservation/create_reservation'); ?>" method="post">
        <label for="customer_name">Customer Name:</label>
        <input type="text" name="customer_name" required><br>

        <label for="customer_nic">NIC:</label>
        <input type="text" name="customer_nic" required><br>

        <label for="project_id">Select Project:</label>
        <select name="project_id" required>
            <!-- Load projects from database and populate dropdown -->
        </select><br>

        <label for="lot_id">Select Lot:</label>
        <select name="lot_id" required>
            <!-- Load lots based on selected project from database and populate dropdown -->
        </select><br>

        <label for="reservation_date">Reservation Date:</label>
        <input type="date" name="reservation_date" required><br>

        <label for="installment_count">Number of Installments:</label>
        <input type="number" name="installment_count" min="1" max="6" required><br>

        <input type="submit" value="Create">
    </form>
</body>
</html>
