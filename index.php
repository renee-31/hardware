<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mwihoko Auto Spares & Hardware - Poster Design</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .poster-container {
            width: 100%;
            max-width: 800px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }

        .poster {
            background: white;
            padding: 40px;
            position: relative;
        }

        .header {
            background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
            padding: 25px;
            text-align: center;
            margin-bottom: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .company-name {
            color: white;
            font-size: 42px;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .tagline {
            color: white;
            font-size: 22px;
            font-weight: 500;
            letter-spacing: 1px;
        }

        .content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 30px;
        }

        .services {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 8px;
            border-left: 5px solid #1a2a6c;
        }

        .services h2 {
            color: #1a2a6c;
            margin-bottom: 15px;
            font-size: 24px;
            border-bottom: 2px solid #fdbb2d;
            padding-bottom: 8px;
        }

        .services ul {
            list-style-type: none;
        }

        .services li {
            padding: 10px 0;
            font-size: 18px;
            display: flex;
            align-items: center;
        }

        .services li:before {
            content: "✓";
            color: #b21f1f;
            font-weight: bold;
            margin-right: 10px;
            font-size: 20px;
        }

        .contact {
            background: #1a2a6c;
            color: white;
            padding: 25px;
            border-radius: 8px;
        }

        .contact h2 {
            color: #fdbb2d;
            margin-bottom: 15px;
            font-size: 24px;
            border-bottom: 2px solid #fdbb2d;
            padding-bottom: 8px;
        }

        .contact p {
            margin-bottom: 12px;
            font-size: 18px;
            display: flex;
            align-items: center;
        }

        .contact i {
            margin-right: 10px;
            font-size: 20px;
            color: #fdbb2d;
        }

        .offer {
            background: linear-gradient(135deg, #fdbb2d, #b21f1f);
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            margin-bottom: 30px;
            color: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .offer h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .offer p {
            font-size: 20px;
            font-weight: 500;
        }

        .footer {
            display: flex;
            justify-content: space-between;
            background: #1a2a6c;
            color: white;
            padding: 20px;
            border-radius: 8px;
        }

        .hours, .location {
            flex: 1;
        }

        .hours h3, .location h3 {
            color: #fdbb2d;
            margin-bottom: 10px;
            font-size: 20px;
        }

        .hours p, .location p {
            margin-bottom: 5px;
            font-size: 16px;
        }

        .tools-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin: 25px 0;
        }

        .tool-icon {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            font-size: 14px;
            font-weight: 500;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s;
        }

        .tool-icon:hover {
            transform: translateY(-5px);
        }

        .tool-icon i {
            font-size: 24px;
            margin-bottom: 8px;
            display: block;
            color: #1a2a6c;
        }

        @media (max-width: 700px) {
            .content {
                grid-template-columns: 1fr;
            }
            
            .company-name {
                font-size: 32px;
            }
            
            .tools-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>
<body>
    <div class="poster-container">
        <div class="poster">
            <div class="header">
                <h1 class="company-name">Mwihoko Auto Spares & Hardware</h1>
                <p class="tagline">Your One-Stop Solution for Auto Parts & Hardware Needs</p>
            </div>
            
            <div class="offer">
                <h2>GRAND OPENING SALE!</h2>
                <p>15% OFF on all auto parts this weekend only</p>
            </div>
            
            <div class="tools-grid">
                <div class="tool-icon">
                    <i>🔧</i>
                    <span>Tools</span>
                </div>
                <div class="tool-icon">
                    <i>🚗</i>
                    <span>Auto Parts</span>
                </div>
                <div class="tool-icon">
                    <i>⚡</i>
                    <span>Electrical</span>
                </div>
                <div class="tool-icon">
                    <i>🛠️</i>
                    <span>Hardware</span>
                </div>
            </div>
            
            <div class="content">
                <div class="services">
                    <h2>Our Products & Services</h2>
                    <ul>
                        <li>Car Parts & Accessories</li>
                        <li>Tools & Equipment</li>
                        <li>Building Materials</li>
                        <li>Electrical Supplies</li>
                        <li>Plumbing Materials</li>
                        <li>Paint & Painting Tools</li>
                        <li>Safety Equipment</li>
                        <li>Expert Advice & Support</li>
                    </ul>
                </div>
                
                <div class="contact">
                    <h2>Contact Us</h2>
                    <p><i>📞</i> Phone: 0712 345 678 / 0733 456 789</p>
                    <p><i>📧</i> Email: info@mwihokoautospares.co.ke</p>
                    <p><i>🕘</i> Open: Mon-Sat 8:00 AM - 7:00 PM</p>
                    <p><i>📱</i> Follow us on social media</p>
                </div>
            </div>
            
            <div class="footer">
                <div class="hours">
                    <h3>Business Hours</h3>
                    <p>Monday - Friday: 8:00 AM - 7:00 PM</p>
                    <p>Saturday: 8:00 AM - 5:00 PM</p>
                    <p>Sunday: 10:00 AM - 3:00 PM</p>
                </div>
                
                <div class="location">
                    <h3>Visit Our Store</h3>
                    <p>Mwihoko Town Center</p>
                    <p>Near Mwihoko Market</p>
                    <p>Free Parking Available</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>