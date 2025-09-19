<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Closed | Next Frontier Conference</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: #f5f5f5;
            color: #333;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            max-width: 800px;
            width: 100%;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
        }
        
        .header {
            background: orange;
            color: white;
            padding: 30px;
            text-align: center;
            width: 100%;
            margin: 0;
            box-sizing: border-box;
        }
        
        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        .header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        
        .content {
            padding: 40px;
            text-align: center;
        }
        
        .status-icon {
            font-size: 5rem;
            color: #ff4757;
            margin-bottom: 20px;
        }
        
        .status-title {
            font-size: 2rem;
            color: #ff4757;
            margin-bottom: 15px;
        }
        
        .status-message {
            font-size: 1.2rem;
            line-height: 1.6;
            margin-bottom: 30px;
            color: #555;
        }
        
        .details {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            text-align: left;
        }
        
        .details h3 {
            color: black;
            margin-bottom: 15px;
            font-size: 1.3rem;
        }
        
        .detail-item {
            display: flex;
            margin-bottom: 10px;
        }
        
        .detail-item i {
            color: orange;
            margin-right: 10px;
            margin-top: 4px;
        }
        
        .btn {
            display: inline-block;
            background: orange;
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            margin: 10px 5px;
            transition: all 0.3s ease;
        }
        
        .btn:hover {
            background: #e59400;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .footer {
            background: #f1f3f5;
            padding: 20px;
            text-align: center;
            color: #666;
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }
            
            .content {
                padding: 20px;
            }
            
            .status-icon {
                font-size: 4rem;
            }
            
            .status-title {
                font-size: 1.7rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Next Frontier Conference</h1>
            <p>September 20, Landmark Towers, Lagos, Nigeria</p>
        </div>
        
        <div class="content">
            <div class="status-icon">
                <i class="fas fa-times-circle"></i>
            </div>
            
            <h2 class="status-title">Registration is now closed</h2>
            
            <p class="status-message">
                We're sorry, but registration for this Conference has officially closed. The registration period ended on September 19, 2025.
            </p>
            
            <div class="details">
                <h3>Event Details</h3>
                
                <div class="detail-item">
                    <i class="fas fa-calendar-alt"></i>
                    <div>
                        <strong>Date:</strong> September 20, 2025
                    </div>
                </div>
                
                <div class="detail-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <strong>Location:</strong> Landmark Towers, Lagos, Nigeria
                    </div>
                </div>
                
                <div class="detail-item">
                    <i class="fas fa-users"></i>
                    <div>
                        <strong>Attendees:</strong> All available spots have been filled
                    </div>
                </div>
            </div>
            
            <div class="re">
                <a href="index.php" class="btn">
                    <i class="fas fa-home"></i> Return to Homepage
                </a>
            </div>
        </div>
        
        <div class="footer">
            <p>© 2025 Next Frontier Conference. All rights reserved.</p>
        </div>
    </div>
</body>
</html>