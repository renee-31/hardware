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
                <p class="tagline">Your One-Stop Solution for Auto Parts & Hardware Needs!</p>
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
                    <p><i>📞</i> Phone: 0729 112 631 / 0762471326</p>
                    <p><i>📧</i> Email: info@mwihokoautospares.co.ke</p>
                    <p><i>🕘</i> Open: Mon-Sat 8:00 AM - 7:00 PM</p>
                    <p><i>📱</i> Follow us on social media</p>
                </div>
            </div>
            <!-- Products Section -->
<div class="products-section">
    <h2>Our Products & Prices</h2>
    
    <div class="products-grid">
        <!-- Auto Parts Category -->
        <div class="product-category">
            <h3><i>🚗</i> Auto Parts</h3>
            <div class="product-list">
                <div class="product-item">
                    <span class="product-name">Brake Pads (Set)</span>
                    <span class="product-price">KSh 2,500</span>
                </div>
                <div class="product-item">
                    <span class="product-name">Oil Filter</span>
                    <span class="product-price">KSh 850</span>
                </div>
                <div class="product-item">
                    <span class="product-name">Spark Plugs (Set of 4)</span>
                    <span class="product-price">KSh 1,200</span>
                </div>
                <div class="product-item">
                    <span class="product-name">Car Battery</span>
                    <span class="product-price">KSh 8,500</span>
                </div>
                <div class="product-item">
                    <span class="product-name">Headlight Bulbs</span>
                    <span class="product-price">KSh 1,800</span>
                </div>
            </div>
        </div>
        
        <!-- Tools Category -->
        <div class="product-category">
            <h3><i>🔧</i> Tools & Equipment</h3>
            <div class="product-list">
                <div class="product-item">
                    <span class="product-name">Tool Kit (32 pcs)</span>
                    <span class="product-price">KSh 4,200</span>
                </div>
                <div class="product-item">
                    <span class="product-name">Power Drill</span>
                    <span class="product-price">KSh 6,500</span>
                </div>
                <div class="product-item">
                    <span class="product-name">Hammer</span>
                    <span class="product-price">KSh 750</span>
                </div>
                <div class="product-item">
                    <span class="product-name">Screwdriver Set</span>
                    <span class="product-price">KSh 1,500</span>
                </div>
                <div class="product-item">
                    <span class="product-name">Wrench Set</span>
                    <span class="product-price">KSh 2,800</span>
                </div>
            </div>
        </div>
        
        <!-- Building Materials Category -->
        <div class="product-category">
            <h3><i>🏗️</i> Building Materials</h3>
            <div class="product-list">
                <div class="product-item">
                    <span class="product-name">Cement (50kg)</span>
                    <span class="product-price">KSh 850</span>
                </div>
                <div class="product-item">
                    <span class="product-name">Nails (1kg)</span>
                    <span class="product-price">KSh 350</span>
                </div>
                <div class="product-item">
                    <span class="product-name">Screws (Assorted)</span>
                    <span class="product-price">KSh 250</span>
                </div>
                <div class="product-item">
                    <span class="product-name">PVC Pipes (6ft)</span>
                    <span class="product-price">KSh 450</span>
                </div>
                <div class="product-item">
                    <span class="product-name">Paint Brush Set</span>
                    <span class="product-price">KSh 1,200</span>
                </div>
            </div>
        </div>
        
        <!-- Electrical Category -->
        <div class="product-category">
            <h3><i>⚡</i> Electrical Supplies</h3>
            <div class="product-list">
                <div class="product-item">
                    <span class="product-name">Electrical Wires (per meter)</span>
                    <span class="product-price">KSh 180</span>
                </div>
                <div class="product-item">
                    <span class="product-name">Light Bulbs (LED)</span>
                    <span class="product-price">KSh 350</span>
                </div>
                <div class="product-item">
                    <span class="product-name">Switches & Sockets</span>
                    <span class="product-price">KSh 450</span>
                </div>
                <div class="product-item">
                    <span class="product-name">Extension Cord (10m)</span>
                    <span class="product-price">KSh 1,500</span>
                </div>
                <div class="product-item">
                    <span class="product-name">Circuit Breaker</span>
                    <span class="product-price">KSh 1,800</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Services Section -->
<div class="services-section">
    <h2>Our Services</h2>
    
    <div class="services-grid">
        <div class="service-item">
            <div class="service-icon">🔧</div>
            <h3>Auto Parts Installation</h3>
            <p>Professional installation of all auto parts with warranty</p>
            <div class="service-price">Starting from KSh 1,000</div>
        </div>
        
        <div class="service-item">
            <div class="service-icon">🚗</div>
            <h3>Vehicle Diagnostics</h3>
            <p>Comprehensive vehicle inspection and problem identification</p>
            <div class="service-price">KSh 1,500</div>
        </div>
        
        <div class="service-item">
            <div class="service-icon">🛠️</div>
            <h3>Tool Repair & Maintenance</h3>
            <p>Repair and servicing of all power tools and equipment</p>
            <div class="service-price">Starting from KSh 800</div>
        </div>
        
        <div class="service-item">
            <div class="service-icon">🏠</div>
            <h3>Home Improvement Consultation</h3>
            <p>Expert advice for your DIY projects and home repairs</p>
            <div class="service-price">Free Consultation</div>
        </div>
        
        <div class="service-item">
            <div class="service-icon">⚡</div>
            <h3>Electrical Installation</h3>
            <p>Safe and professional electrical wiring and installations</p>
            <div class="service-price">Starting from KSh 2,500</div>
        </div>
        
        <div class="service-item">
            <div class="service-icon">🔩</div>
            <h3>Custom Fabrication</h3>
            <p>Custom metal and wood fabrication for unique projects</p>
            <div class="service-price">Price on Request</div>
        </div>
    </div>
</div>

<style>
    /* Products Section Styles */
    .products-section {
        margin: 30px 0;
        padding: 25px;
        background: #f8f9fa;
        border-radius: 8px;
        border-left: 5px solid #1a2a6c;
    }
    
    .products-section h2 {
        color: #1a2a6c;
        margin-bottom: 20px;
        font-size: 24px;
        border-bottom: 2px solid #fdbb2d;
        padding-bottom: 8px;
    }
    
    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }
    
    .product-category {
        background: white;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
    }
    
    .product-category h3 {
        color: #1a2a6c;
        margin-bottom: 15px;
        font-size: 18px;
        display: flex;
        align-items: center;
    }
    
    .product-category h3 i {
        margin-right: 10px;
        font-size: 20px;
    }
    
    .product-list {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    
    .product-item {
        display: flex;
        justify-content: space-between;
        padding: 8px 0;
        border-bottom: 1px dashed #e0e0e0;
    }
    
    .product-name {
        font-weight: 500;
    }
    
    .product-price {
        font-weight: bold;
        color: #b21f1f;
    }
    
    /* Services Section Styles */
    .services-section {
        margin: 30px 0;
        padding: 25px;
        background: #f8f9fa;
        border-radius: 8px;
        border-left: 5px solid #fdbb2d;
    }
    
    .services-section h2 {
        color: #1a2a6c;
        margin-bottom: 20px;
        font-size: 24px;
        border-bottom: 2px solid #fdbb2d;
        padding-bottom: 8px;
    }
    
    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
    }
    
    .service-item {
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
        text-align: center;
        transition: transform 0.3s;
    }
    
    .service-item:hover {
        transform: translateY(-5px);
    }
    
    .service-icon {
        font-size: 40px;
        margin-bottom: 15px;
    }
    
    .service-item h3 {
        color: #1a2a6c;
        margin-bottom: 10px;
        font-size: 18px;
    }
    
    .service-item p {
        color: #666;
        margin-bottom: 15px;
        font-size: 14px;
        line-height: 1.4;
    }
    
    .service-price {
        font-weight: bold;
        color: #b21f1f;
        font-size: 16px;
    }
    
    @media (max-width: 700px) {
        .products-grid {
            grid-template-columns: 1fr;
        }
        
        .services-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

            
            <div class="footer">
                <div class="hours">
                    <h3>Business Hours</h3>
                    <p>Monday - Friday: 8:00 AM - 7:00 PM</p>
                    <p>Saturday: 8:00 AM - 5:00 PM</p>
                    <p>Sunday: 10:00 AM - 3:00 PM</p>
                </div>
                
                <div class="location">
                    <h3>Visit Our Store</h3>
                    <p>Sipili Town Center</p>
                            <p>Free Parking Available</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
