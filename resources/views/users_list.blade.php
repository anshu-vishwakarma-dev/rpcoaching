<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users AJAX List</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <style>
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .user-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .user-table th, .user-table td {
            text-align: left;
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        .user-table th {
            background-color: var(--primary-color, #009688);
            color: white;
        }
        .user-table tr:hover {
            background-color: #f5f5f5;
        }
        .status-message {
            text-align: center;
            padding: 20px;
            color: #666;
        }
    </style>
</head>
<body style="background-color: #f4f7f6;">

<div class="container">
    <div class="header">
        <h2><i class="fa-solid fa-users"></i> Registered Users</h2>
        <button id="fetchUsers" class="btn1" style="background: var(--primary-color); color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
            Fetch Users
        </button>
    </div>

    <div id="resultArea">
        <div class="status-message">Click the button to load users.</div>
    </div>
</div>

<script>
    document.getElementById('fetchUsers').addEventListener('click', function() {
        const resultArea = document.getElementById('resultArea');
        const btn = this;
        
        resultArea.innerHTML = '<div class="status-message"><i class="fa-solid fa-spinner fa-spin"></i> Fetching users...</div>';
        btn.disabled = true;
        btn.textContent = 'Fetching...';

        fetch("{{ url('api/users') }}")
            .then(response => response.json())
            .then(data => {
                btn.disabled = false;
                btn.textContent = 'Fetch Users';

                if (data.status === 'true' && data.data.length > 0) {
                    let tableHtml = `
                        <table class="user-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                    `;
                    
                    data.data.forEach(user => {
                        tableHtml += `
                            <tr>
                                <td>${user.id}</td>
                                <td>${user.name}</td>
                                <td>${user.email}</td>
                            </tr>
                        `;
                    });

                    tableHtml += `</tbody></table>`;
                    resultArea.innerHTML = tableHtml;
                } else {
                    resultArea.innerHTML = '<div class="status-message">No users found.</div>';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                btn.disabled = false;
                btn.textContent = 'Fetch Users';
                resultArea.innerHTML = '<div class="status-message" style="color: red;"><i class="fa-solid fa-circle-exclamation"></i> Failed to fetch users. Please try again.</div>';
            });
    });
</script>

</body>
</html>
