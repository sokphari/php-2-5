<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Management</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }
        
        /* Custom scrollbar for table */
        .table-container::-webkit-scrollbar {
            height: 8px;
            width: 8px;
        }
        
        .table-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }
        
        .table-container::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 4px;
        }
        
        .table-container::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }
        
        /* Smooth transitions */
        tr {
            transition: all 0.2s ease;
        }
        
        tr:hover {
            transform: translateY(-1px);
        }
        
        /* Status badges */
        .status-badge {
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 70px;
        }
    </style>
</head>
<body class="bg-gray-50 p-4 md:p-6">
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800 flex items-center">
                    <i class="fas fa-users text-blue-600 mr-3"></i> Customer Management
                </h1>
                <p class="text-gray-600 mt-2">View and manage all customer records</p>
            </div>
            
            <div class="mt-4 md:mt-0 flex items-center space-x-3">
                <div class="relative">
                    <input type="text" 
                           placeholder="Search customers..." 
                           class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent w-full md:w-64">
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
                <a href="index.php" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium flex items-center transition duration-200">
                    <i class="fas fa-plus mr-2"></i> Add Customer
                </a>
            </div>
        </div>
        
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
            <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500 font-medium">Total Customers</p>
                        <p class="text-2xl font-bold text-gray-800 mt-1">2</p>
                    </div>
                    <div class="w-12 h-12 rounded-lg bg-blue-50 flex items-center justify-center">
                        <i class="fas fa-user-friends text-blue-600 text-xl"></i>
                    </div>
                </div>
                <div class="mt-3 pt-3 border-t border-gray-100">
                    <span class="text-xs text-green-600 font-medium">
                        <i class="fas fa-arrow-up mr-1"></i> 2.5%
                    </span>
                    <span class="text-xs text-gray-500 ml-2">from last month</span>
                </div>
            </div>
            
            <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500 font-medium">Male</p>
                        <p class="text-2xl font-bold text-gray-800 mt-1">1</p>
                    </div>
                    <div class="w-12 h-12 rounded-lg bg-indigo-50 flex items-center justify-center">
                        <i class="fas fa-male text-indigo-600 text-xl"></i>
                    </div>
                </div>
                <div class="mt-3 pt-3 border-t border-gray-100">
                    <span class="text-xs text-green-600 font-medium">
                        <i class="fas fa-arrow-up mr-1"></i> 1.2%
                    </span>
                    <span class="text-xs text-gray-500 ml-2">from last month</span>
                </div>
            </div>
            
            <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500 font-medium">Female</p>
                        <p class="text-2xl font-bold text-gray-800 mt-1">1</p>
                    </div>
                    <div class="w-12 h-12 rounded-lg bg-pink-50 flex items-center justify-center">
                        <i class="fas fa-female text-pink-600 text-xl"></i>
                    </div>
                </div>
                <div class="mt-3 pt-3 border-t border-gray-100">
                    <span class="text-xs text-green-600 font-medium">
                        <i class="fas fa-arrow-up mr-1"></i> 0.8%
                    </span>
                    <span class="text-xs text-gray-500 ml-2">from last month</span>
                </div>
            </div>
            
            <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500 font-medium">Active</p>
                        <p class="text-2xl font-bold text-gray-800 mt-1">2</p>
                    </div>
                    <div class="w-12 h-12 rounded-lg bg-green-50 flex items-center justify-center">
                        <i class="fas fa-check-circle text-green-600 text-xl"></i>
                    </div>
                </div>
                <div class="mt-3 pt-3 border-t border-gray-100">
                    <span class="text-xs text-green-600 font-medium">
                        <i class="fas fa-arrow-up mr-1"></i> 5.2%
                    </span>
                    <span class="text-xs text-gray-500 ml-2">from last month</span>
                </div>
            </div>
        </div>
        
        <!-- Table Container -->
        <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden">
            <!-- Table Header -->
            <div class="px-6 py-4 border-b border-gray-200 flex flex-col md:flex-row justify-between items-start md:items-center">
                <div>
                    <h2 class="text-lg font-semibold text-gray-800">Customer Records</h2>
                    <p class="text-sm text-gray-600 mt-1">Showing <?php 
                        include('config.php');
                        try {
                            $sql = "SELECT COUNT(*) as total FROM `tb_customer`";
                            $result = $config->query($sql);
                            if($result) {
                                $row = mysqli_fetch_assoc($result);
                                echo $row['total'];
                            } else {
                                echo "0";
                            }
                        } catch(Exception $e) {
                            echo "0";
                        }
                    ?> total customers</p>
                </div>
                
                <div class="mt-3 md:mt-0 flex items-center space-x-3">
                    <div class="flex items-center space-x-2">
                        <span class="text-sm text-gray-600">Filter by:</span>
                        <select class="border border-gray-300 rounded-lg px-3 py-1.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option>All</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <button class="text-gray-500 hover:text-gray-700 p-2 rounded-lg hover:bg-gray-100 transition duration-200">
                        <i class="fas fa-download"></i>
                    </button>
                </div>
            </div>
            
            <!-- Table -->
            <div class="table-container overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <span>ID</span>
                                    <button class="ml-1 text-gray-400 hover:text-gray-600">
                                        <i class="fas fa-sort"></i>
                                    </button>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <span>USERNAME</span>
                                    <button class="ml-1 text-gray-400 hover:text-gray-600">
                                        <i class="fas fa-sort"></i>
                                    </button>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <span>GENDER</span>
                                    <button class="ml-1 text-gray-400 hover:text-gray-600">
                                        <i class="fas fa-sort"></i>
                                    </button>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <span>EMAIL</span>
                                    <button class="ml-1 text-gray-400 hover:text-gray-600">
                                        <i class="fas fa-sort"></i>
                                    </button>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <span>PASSWORD</span>
                                    <button class="ml-1 text-gray-400 hover:text-gray-600">
                                        <i class="fas fa-sort"></i>
                                    </button>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ACTION
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php
                            include('config.php');
                            try {
                                $sql = "SELECT * FROM `tb_customer`";
                                $result = $config->query($sql);
                                if(!$result) {
                                    echo '<tr><td colspan="6" class="px-6 py-8 text-center text-gray-500">No data found in database</td></tr>';
                                } else {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        // Determine gender badge color
                                        $genderClass = "bg-blue-100 text-blue-800";
                                        $genderIcon = "fas fa-user";
                                        
                                        if($row['gender'] == 'Female') {
                                            $genderClass = "bg-pink-100 text-pink-800";
                                            $genderIcon = "fas fa-female";
                                        } elseif($row['gender'] == 'Male') {
                                            $genderClass = "bg-indigo-100 text-indigo-800";
                                            $genderIcon = "fas fa-male";
                                        } else {
                                            $genderClass = "bg-gray-100 text-gray-800";
                                            $genderIcon = "fas fa-user";
                                        }
                                        
                                        echo '
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center mr-3">
                                                        <span class="text-sm font-medium text-gray-700">'.$row['cus_id'].'</span>
                                                    </div>
                                                    <div class="text-sm font-medium text-gray-900">#'.$row['cus_id'].'</div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-800 flex items-center justify-center mr-3">
                                                        <i class="fas fa-user text-sm"></i>
                                                    </div>
                                                    <div>
                                                        <div class="text-sm font-medium text-gray-900">'.$row['username'].'</div>
                                                        <div class="text-xs text-gray-500">Customer</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <span class="status-badge '.$genderClass.'">
                                                        <i class="'.$genderIcon.' mr-1"></i> '.$row['gender'].'
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <i class="fas fa-envelope text-gray-400 mr-2"></i>
                                                    <div class="text-sm text-gray-900">'.$row['email'].'</div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <i class="fas fa-lock text-gray-400 mr-2"></i>
                                                    <div class="text-sm font-mono text-gray-700">••••••••</div>
                                                    <button class="ml-2 text-gray-400 hover:text-gray-600" title="Show password">
                                                        <i class="fas fa-eye text-xs"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <div class="flex items-center space-x-2">
                                                    <button class="text-blue-600 hover:text-blue-900 p-1.5 rounded-md hover:bg-blue-50 transition duration-200" title="View">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="text-green-600 hover:text-green-900 p-1.5 rounded-md hover:bg-green-50 transition duration-200" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button class="text-red-600 hover:text-red-900 p-1.5 rounded-md hover:bg-red-50 transition duration-200" title="Delete">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                    <button class="text-purple-600 hover:text-purple-900 p-1.5 rounded-md hover:bg-purple-50 transition duration-200" title="More">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        ';
                                    }
                                }
                            } catch(Exception $e) {
                                echo '<tr><td colspan="6" class="px-6 py-8 text-center text-red-500">Error loading data: '.$e->getMessage().'</td></tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            
            <!-- Table Footer -->
            <div class="px-6 py-4 border-t border-gray-200 flex flex-col md:flex-row justify-between items-start md:items-center">
                <div class="text-sm text-gray-500 mb-3 md:mb-0">
                    Showing <span class="font-medium">1</span> to <span class="font-medium">2</span> of <span class="font-medium">2</span> results
                </div>
                
                <div class="flex items-center space-x-2">
                    <button class="px-3 py-1.5 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
                        <i class="fas fa-chevron-left mr-1"></i> Previous
                    </button>
                    <button class="px-3 py-1.5 bg-blue-600 text-white rounded-md text-sm font-medium hover:bg-blue-700">
                        1
                    </button>
                    <button class="px-3 py-1.5 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                        2
                    </button>
                    <button class="px-3 py-1.5 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                        Next <i class="fas fa-chevron-right ml-1"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Footer Note -->
        <div class="mt-8 text-center text-sm text-gray-500">
            <p><i class="fas fa-database mr-1"></i> Data is fetched from <code class="bg-gray-100 px-2 py-1 rounded">tb_customer</code> table</p>
            <p class="mt-2">Last updated: <?php echo date("F j, Y, g:i a"); ?></p>
        </div>
    </div>

    <script>
        // Interactive features for the table
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effects to table rows
            const tableRows = document.querySelectorAll('tbody tr');
            tableRows.forEach(row => {
                row.addEventListener('mouseenter', function() {
                    this.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)';
                });
                
                row.addEventListener('mouseleave', function() {
                    this.style.boxShadow = 'none';
                });
            });
            
            // Password visibility toggle
            document.querySelectorAll('button[title="Show password"]').forEach(btn => {
                btn.addEventListener('click', function() {
                    const passwordCell = this.closest('td');
                    const passwordText = passwordCell.querySelector('.font-mono');
                    
                    if (passwordText.textContent === '••••••••') {
                        // In a real app, you would fetch the actual password via AJAX
                        passwordText.textContent = 'password123';
                        this.innerHTML = '<i class="fas fa-eye-slash text-xs"></i>';
                        this.title = "Hide password";
                    } else {
                        passwordText.textContent = '••••••••';
                        this.innerHTML = '<i class="fas fa-eye text-xs"></i>';
                        this.title = "Show password";
                    }
                });
            });
            
            // Sort buttons (simulated)
            document.querySelectorAll('thead button').forEach(btn => {
                btn.addEventListener('click', function() {
                    const icon = this.querySelector('i');
                    if (icon.classList.contains('fa-sort')) {
                        icon.classList.remove('fa-sort');
                        icon.classList.add('fa-sort-up');
                        this.style.color = '#4f46e5';
                    } else if (icon.classList.contains('fa-sort-up')) {
                        icon.classList.remove('fa-sort-up');
                        icon.classList.add('fa-sort-down');
                        this.style.color = '#dc2626';
                    } else {
                        icon.classList.remove('fa-sort-down');
                        icon.classList.add('fa-sort');
                        this.style.color = '';
                    }
                });
            });
            
            // Search functionality (simulated)
            const searchInput = document.querySelector('input[placeholder="Search customers..."]');
            searchInput.addEventListener('keyup', function() {
                const searchTerm = this.value.toLowerCase();
                const rows = document.querySelectorAll('tbody tr');
                
                rows.forEach(row => {
                    const text = row.textContent.toLowerCase();
                    if (text.includes(searchTerm)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>