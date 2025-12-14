<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Masjid Management Dashboard</title>
    <style>
        body{
            margin:0;
            font-family: Arial, sans-serif;
            background:#f5f6fa;
        }
        .sidebar{
            width:240px;
            height:100vh;
            background:#2c3e50;
            color:white;
            position:fixed;
            top:0;
            left:0;
            padding:20px;
        }
        .sidebar h2{
            margin-bottom:30px;
        }
        .sidebar a{
            display:block;
            text-decoration:none;
            color:white;
            margin:15px 0;
            padding:10px;
            border-radius:6px;
        }
        .sidebar a:hover{
            background:#34495e;
        }

        .content{
            margin-left:260px;
            padding:20px;
        }

        .cards{
            display:flex;
            gap:20px;
            margin-bottom:20px;
        }

        .card{
            background:white;
            padding:20px;
            border-radius:8px;
            box-shadow:0 1px 4px rgba(0,0,0,0.1);
            width:30%;
        }

        .section{
            background:white;
            padding:20px;
            border-radius:8px;
            box-shadow:0 1px 4px rgba(0,0,0,0.1);
            margin-top:20px;
        }

        table{
            width:100%;
            border-collapse: collapse;
        }

        table th, table td{
            padding:12px;
            border-bottom:1px solid #ddd;
            text-align:left;
        }

        table th{
            background:#ecf0f1;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <h2>Masjid Admin</h2>
        <a href="#">Dashboard</a>
        <a href="#">Donations</a>
        <a href="#">Imam Management</a>
        <a href="#">Committee Members</a>
        <a href="#">Events</a>
        <a href="#">Expense Records</a>
        <a href="#">Musalli List</a>
        <a href="#">Logout</a>
    </div>

    <div class="content">
        <h1>Dashboard Overview</h1>

        <div class="cards">
            <div class="card">
                <h3>Total Donations</h3>
                <p><b>৳ 150,000</b></p> <!-- Static data -->
            </div>
            <div class="card">
                <h3>Monthly Expense</h3>
                <p><b>৳ 42,000</b></p> <!-- Static data -->
            </div>
            <div class="card">
                <h3>Committee Members</h3>
                <p><b>12 Members</b></p> <!-- Static data -->
            </div>
        </div>

        <div class="section">
            <h3>Recent Donations (Static Data)</h3>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Date</th>
                </tr>
                <tr>
                    <td>Abdullah</td>
                    <td>৳ 2,000</td>
                    <td>2025-01-10</td>
                </tr>
                <tr>
                    <td>Karim</td>
                    <td>৳ 5,000</td>
                    <td>2025-01-09</td>
                </tr>
                <tr>
                    <td>Jamil</td>
                    <td>৳ 1,500</td>
                    <td>2025-01-08</td>
                </tr>
            </table>
        </div>

        <div class="section">
            <h3>Upcoming Events (Static)</h3>
            <ul>
                <li>Jummah Khutbah – Friday 1 PM</li>
                <li>Halaqa — Saturday Night</li>
                <li>Islamic Lecture — 20 January</li>
            </ul>
        </div>

    </div>

</body>
</html>
