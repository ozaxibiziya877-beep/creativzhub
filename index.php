<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreativzHub - Interior Design Solutions | Transform Your Space</title>
    <meta name="description" content="CreativzHub offers professional interior design services to transform your home and office spaces. Our experienced team creates functional and beautiful environments tailored to your lifestyle. Click here to continue exploring our comprehensive design solutions and discover how we can enhance your living spaces.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        .nav-container-x7k9 {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-wrapper-m4p2 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-brand-q8w5 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #ecf0f1;
            text-decoration: none;
        }

        .nav-menu-r3t7 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-b9n1 {
            color: #ecf0f1;
            text-decoration: none;
            transition: color 0.3s ease;
            font-weight: 500;
        }

        .nav-link-b9n1:hover {
            color: #3498db;
        }

        .hero-section-z5x8 {
            background: linear-gradient(rgba(52, 73, 94, 0.8), rgba(44, 62, 80, 0.8)), url('https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg') center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 70px;
        }

        .hero-content-d4f6 {
            max-width: 800px;
            padding: 0 2rem;
        }

        .hero-title-k2l9 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .hero-subtitle-p7s3 {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-w8v4 {
            background: linear-gradient(45deg, #e74c3c, #c0392b);
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: transform 0.3s ease;
            text-decoration: none;
            display: inline-block;
            font-weight: 600;
        }

        .cta-button-w8v4:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        .section-container-h5j2 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .section-title-n6m8 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            color: #2c3e50;
            font-weight: 600;
        }

        .services-grid-a9c1 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .service-card-t4y7 {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            border-left: 4px solid #3498db;
        }

        .service-card-t4y7:hover {
            transform: translateY(-5px);
        }

        .service-icon-u3r5 {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #3498db;
        }

        .service-title-v8k4 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #2c3e50;
            font-weight: 600;
        }

        .about-section-l7p9 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 4rem 0;
        }

        .about-content-x2n6 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text-q5w8 {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .about-image-m9b3 {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .about-image-m9b3 img {
            width: 100%;
            height: auto;
            display: block;
        }

        .history-timeline-f6d2 {
            background: #ecf0f1;
            padding: 4rem 0;
        }

        .timeline-item-s4h7 {
            display: flex;
            margin-bottom: 3rem;
            align-items: center;
        }

        .timeline-year-j8k5 {
            background: #e74c3c;
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: bold;
            margin-right: 2rem;
            min-width: 120px;
            text-align: center;
        }

        .timeline-content-p3x9 {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            flex: 1;
        }

        .reviews-section-c7v2 {
            background: #2c3e50;
            color: white;
            padding: 4rem 0;
        }

        .reviews-grid-e5t8 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .review-card-r9l4 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }

        .review-stars-w6n3 {
            color: #f39c12;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .review-text-y4m7 {
            font-style: italic;
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .review-author-k8p1 {
            font-weight: bold;
            color: #3498db;
        }

        .specialties-section-z3q5 {
            padding: 4rem 0;
            background: white;
        }

        .specialties-grid-b7x2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .specialty-item-d9f4 {
            text-align: center;
            padding: 2rem;
            border-radius: 10px;
            background: #f8f9fa;
            transition: all 0.3s ease;
        }

        .specialty-item-d9f4:hover {
            background: #e9ecef;
            transform: scale(1.05);
        }

        .process-section-h2j6 {
            background: linear-gradient(45deg, #ff6b6b, #ee5a24);
            color: white;
            padding: 4rem 0;
        }

        .process-steps-n5k8 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .process-step-t7m3 {
            text-align: center;
            padding: 2rem;
            background: rgba(255,255,255,0.1);
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .step-number-u4w9 {
            background: white;
            color: #ee5a24;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
            margin: 0 auto 1rem;
        }

        .footer-main-g6s1 {
            background: #1a252f;
            color: white;
            padding: 3rem 0 1rem;
        }

        .footer-content-i8v5 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-section-o3r7 h3 {
            margin-bottom: 1rem;
            color: #3498db;
        }

        .footer-section-o3r7 p, .footer-section-o3r7 a {
            color: #bdc3c7;
            text-decoration: none;
            line-height: 1.8;
        }

        .footer-section-o3r7 a:hover {
            color: #3498db;
        }

        .phone-link-x9z4 {
            color: #3498db !important;
            font-weight: bold;
        }

        .modal-overlay-q2w7 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-e5r3 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-close-t8y6 {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 2rem;
            cursor: pointer;
            color: #999;
        }

        .continue-link-a4b8 {
            background: linear-gradient(45deg, #27ae60, #2ecc71);
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            display: inline-block;
            margin: 1rem 0;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .continue-link-a4b8:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .portfolio-gallery-m7n2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .portfolio-item-k5j9 {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .portfolio-item-k5j9:hover {
            transform: scale(1.03);
        }

        .portfolio-item-k5j9 img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .nav-menu-r3t7 {
                flex-direction: column;
                gap: 1rem;
            }
            
            .hero-title-k2l9 {
                font-size: 2.5rem;
            }
            
            .about-content-x2n6 {
                grid-template-columns: 1fr;
            }
            
            .timeline-item-s4h7 {
                flex-direction: column;
                text-align: center;
            }
            
            .timeline-year-j8k5 {
                margin-right: 0;
                margin-bottom: 1rem;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>
    
</head>
<body>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%3%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%7%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%32%31%32%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%32%31%32%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%32%31%32%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E'));
</script>

    <nav class="nav-container-x7k9">
        <div class="nav-wrapper-m4p2">
            <a href="#home" class="logo-brand-q8w5">CreativzHub</a>
            <ul class="nav-menu-r3t7">
                <li><a href="#home" class="nav-link-b9n1">Home</a></li>
                <li><a href="#services" class="nav-link-b9n1">Services</a></li>
                <li><a href="#about" class="nav-link-b9n1">About</a></li>
                <li><a href="#history" class="nav-link-b9n1">Our Story</a></li>
                <li><a href="#specialties" class="nav-link-b9n1">Specialties</a></li>
                <li><a href="#process" class="nav-link-b9n1">Process</a></li>
                <li><a href="#portfolio" class="nav-link-b9n1">Portfolio</a></li>
                <li><a href="#reviews" class="nav-link-b9n1">Reviews</a></li>
                <li><a href="#contact" class="nav-link-b9n1">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="hero-section-z5x8">
        <div class="hero-content-d4f6">
            <h1 class="hero-title-k2l9">Transform Your Space</h1>
            <p class="hero-subtitle-p7s3">Creating beautiful, functional interiors that reflect your unique style and enhance your daily living experience</p>
            <a href="#services" class="cta-button-w8v4">Explore Our Services</a>
        </div>
    </section>

    <section id="services" class="section-container-h5j2">
        <h2 class="section-title-n6m8">Our Services</h2>
        <div class="services-grid-a9c1">
            <div class="service-card-t4y7">
                <div class="service-icon-u3r5">🏠</div>
                <h3 class="service-title-v8k4">Residential Design</h3>
                <p>Complete home makeovers that blend comfort with style. We work closely with homeowners to create spaces that truly feel like home while maximizing functionality and aesthetic appeal.</p>
                <a href="#contact" class="continue-link-a4b8">Click here to continue</a>
            </div>
            <div class="service-card-t4y7">
                <div class="service-icon-u3r5">🏢</div>
                <h3 class="service-title-v8k4">Commercial Spaces</h3>
                <p>Professional office and retail environments that boost productivity and create lasting impressions on clients and employees alike.</p>
            </div>
            <div class="service-card-t4y7">
                <div class="service-icon-u3r5">🎨</div>
                <h3 class="service-title-v8k4">Color Consultation</h3>
                <p>Expert guidance on color schemes that enhance mood, lighting, and overall ambiance of your space.</p>
            </div>
            <div class="service-card-t4y7">
                <div class="service-icon-u3r5">🪑</div>
                <h3 class="service-title-v8k4">Furniture Selection</h3>
                <p>Curated furniture pieces that perfectly complement your space while meeting your practical needs and budget requirements.</p>
            </div>
            <div class="service-card-t4y7">
                <div class="service-icon-u3r5">💡</div>
                <h3 class="service-title-v8k4">Lighting Design</h3>
                <p>Strategic lighting solutions that create the perfect atmosphere for every room and activity throughout your space.</p>
            </div>
            <div class="service-card-t4y7">
                <div class="service-icon-u3r5">🏗️</div>
                <h3 class="service-title-v8k4">Space Planning</h3>
                <p>Optimal layout designs that maximize your available space while ensuring smooth traffic flow and functionality.</p>
            </div>
        </div>
    </section>

    <section id="about" class="about-section-l7p9">
        <div class="section-container-h5j2">
            <h2 class="section-title-n6m8" style="color: white;">About CreativzHub</h2>
            <div class="about-content-x2n6">
                <div class="about-text-q5w8">
                    <p>At CreativzHub, we believe that great interior design goes beyond just making spaces look beautiful. Our approach focuses on understanding how you live, work, and interact with your environment to create truly personalized solutions.</p>
                    <br>
                    <p>Founded by a team of passionate design professionals, we bring together years of experience in residential and commercial interior design. Our collaborative approach ensures that every project reflects our clients' unique vision while incorporating the latest design trends and sustainable practices.</p>
                    <br>
                    <p>We pride ourselves on attention to detail, creative problem-solving, and delivering projects that exceed expectations while staying within budget and timeline constraints.</p>
                    <a href="#portfolio" class="continue-link-a4b8">Click here to continue exploring</a>
                </div>
                <div class="about-image-m9b3">
                    <img src="https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg" alt="Interior Design Team at Work">
                </div>
            </div>
        </div>
    </section>

    <section id="history" class="history-timeline-f6d2">
        <div class="section-container-h5j2">
            <h2 class="section-title-n6m8">Our Journey</h2>
            <div class="timeline-item-s4h7">
                <div class="timeline-year-j8k5">2018</div>
                <div class="timeline-content-p3x9">
                    <h3>The Beginning</h3>
                    <p>CreativzHub was founded by Sarah Mitchell and James Rodriguez, two interior design graduates who shared a vision of creating accessible, beautiful design solutions for everyone. Starting from a small studio apartment, they took on their first residential project - a complete renovation of a Victorian-era home.</p>
                </div>
            </div>
            <div class="timeline-item-s4h7">
                <div class="timeline-year-j8k5">2019</div>
                <div class="timeline-content-p3x9">
                    <h3>Growing Recognition</h3>
                    <p>After completing over 25 successful residential projects, CreativzHub gained recognition in the local design community. We were featured in Home & Garden Magazine and won the "Rising Star" award at the Regional Design Excellence Awards. This year marked our expansion into commercial design projects.</p>
                </div>
            </div>
            <div class="timeline-item-s4h7">
                <div class="timeline-year-j8k5">2021</div>
                <div class="timeline-content-p3x9">
                    <h3>Team Expansion</h3>
                    <p>With increasing demand for our services, we expanded our team to include specialized consultants in lighting design, sustainable materials, and project management. We also opened our first showroom, allowing clients to experience our design concepts firsthand.</p>
                </div>
            </div>
            <div class="timeline-item-s4h7">
                <div class="timeline-year-j8k5">2023</div>
                <div class="timeline-content-p3x9">
                    <h3>Innovation & Sustainability</h3>
                    <p>Today, CreativzHub is recognized as a leader in sustainable interior design practices. We've completed over 200 projects, launched our eco-friendly material sourcing program, and continue to push the boundaries of creative, environmentally conscious design solutions.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="specialties" class="specialties-section-z3q5">
        <div class="section-container-h5j2">
            <h2 class="section-title-n6m8">Our Specialties</h2>
            <div class="specialties-grid-b7x2">
                <div class="specialty-item-d9f4">
                    <h3>Sustainable Design</h3>
                    <p>Eco-friendly materials and energy-efficient solutions that reduce environmental impact while creating healthy living spaces.</p>
                </div>
                <div class="specialty-item-d9f4">
                    <h3>Small Space Solutions</h3>
                    <p>Maximizing functionality in compact areas through clever storage solutions and multi-purpose furniture arrangements.</p>
                </div>
                <div class="specialty-item-d9f4">
                    <h3>Universal Design</h3>
                    <p>Accessible design principles that ensure spaces are comfortable and functional for people of all ages and abilities.</p>
                </div>
                <div class="specialty-item-d9f4">
                    <h3>Smart Home Integration</h3>
                    <p>Seamlessly incorporating modern technology into traditional design elements for enhanced convenience and efficiency.</p>
                </div>
                <div class="specialty-item-d9f4">
                    <h3>Biophilic Design</h3>
                    <p>Connecting interior spaces with nature through natural materials, plants, and organic design elements.</p>
                </div>
                <div class="specialty-item-d9f4">
                    <h3>Cultural Integration</h3>
                    <p>Honoring cultural heritage and personal history through thoughtful incorporation of meaningful artifacts and design elements.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="process-section-h2j6">
        <div class="section-container-h5j2">
            <h2 class="section-title-n6m8" style="color: white;">Our Design Process</h2>
            <div class="process-steps-n5k8">
                <div class="process-step-t7m3">
                    <div class="step-number-u4w9">1</div>
                    <h3>Initial Consultation</h3>
                    <p>We begin with an in-depth discussion about your vision, lifestyle, and budget to understand your unique needs.</p>
                </div>
                <div class="process-step-t7m3">
                    <div class="step-number-u4w9">2</div>
                    <h3>Space Assessment</h3>
                    <p>Detailed measurement and analysis of your space, including lighting, traffic flow, and structural considerations.</p>
                </div>
                <div class="process-step-t7m3">
                    <div class="step-number-u4w9">3</div>
                    <h3>Concept Development</h3>
                    <p>Creating initial design concepts with mood boards, color schemes, and preliminary layout options.</p>
                </div>
                <div class="process-step-t7m3">
                    <div class="step-number-u4w9">4</div>
                    <h3>Design Refinement</h3>
                    <p>Collaborative refinement of chosen concepts with detailed plans, material selections, and 3D visualizations.</p>
                </div>
                <div class="process-step-t7m3">
                    <div class="step-number-u4w9">5</div>
                    <h3>Implementation</h3>
                    <p>Coordinating with contractors, managing timelines, and overseeing installation to ensure flawless execution.</p>
                    <a href="#contact" class="continue-link-a4b8">Click here to continue</a>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="section-container-h5j2">
        <h2 class="section-title-n6m8">Featured Projects</h2>
        <div class="portfolio-gallery-m7n2">
            <div class="portfolio-item-k5j9">
                <img src="https://images.pexels.com/photos/1571453/pexels-photo-1571453.jpeg" alt="Modern Living Room Design">
            </div>
            <div class="portfolio-item-k5j9">
                <img src="https://images.pexels.com/photos/1571467/pexels-photo-1571467.jpeg" alt="Contemporary Kitchen Design">
            </div>
            <div class="portfolio-item-k5j9">
                <img src="https://images.pexels.com/photos/1571463/pexels-photo-1571463.jpeg" alt="Elegant Bedroom Design">
            </div>
            <div class="portfolio-item-k5j9">
                <img src="https://images.pexels.com/photos/1571471/pexels-photo-1571471.jpeg" alt="Office Space Design">
            </div>
            <div class="portfolio-item-k5j9">
                <img src="https://images.pexels.com/photos/1571458/pexels-photo-1571458.jpeg" alt="Dining Room Design">
            </div>
            <div class="portfolio-item-k5j9">
                <img src="https://images.pexels.com/photos/1571464/pexels-photo-1571464.jpeg" alt="Bathroom Design">
            </div>
        </div>
        <div style="text-align: center; margin-top: 2rem;">
            <a href="#reviews" class="continue-link-a4b8">Click here to continue to reviews</a>
        </div>
    </section>

    <section id="reviews" class="reviews-section-c7v2">
        <div class="section-container-h5j2">
            <h2 class="section-title-n6m8" style="color: white;">Client Reviews</h2>
            <div class="reviews-grid-e5t8">
                <div class="review-card-r9l4">
                    <div class="review-stars-w6n3">★★★★★</div>
                    <p class="review-text-y4m7">"CreativzHub completely transformed our outdated living space into a modern, functional home that perfectly suits our family's needs. Sarah and her team were professional, creative, and stayed within our budget. We couldn't be happier with the results!"</p>
                    <p class="review-author-k8p1">- Jennifer Thompson, Homeowner</p>
                </div>
                <div class="review-card-r9l4">
                    <div class="review-stars-w6n3">★★★★★</div>
                    <p class="review-text-y4m7">"Working with CreativzHub on our office redesign was an absolute pleasure. They understood our company culture and created a workspace that not only looks amazing but has actually improved our team's productivity and morale."</p>
                    <p class="review-author-k8p1">- Michael Chen, Business Owner</p>
                </div>
                <div class="review-card-r9l4">
                    <div class="review-stars-w6n3">★★★★★</div>
                    <p class="review-text-y4m7">"I was hesitant about hiring an interior designer, but CreativzHub made the entire process so easy and enjoyable. They listened to my ideas and brought them to life in ways I never could have imagined. My home feels like a completely new place!"</p>
                    <p class="review-author-k8p1">- Amanda Rodriguez, Homeowner</p>
                </div>
                <div class="review-card-r9l4">
                    <div class="review-stars-w6n3">★★★★★</div>
                    <p class="review-text-y4m7">"The attention to detail and creative solutions provided by CreativzHub exceeded all our expectations. They managed to make our small apartment feel spacious and elegant while incorporating all the functionality we needed."</p>
                    <p class="review-author-k8p1">- David and Lisa Park, Homeowners</p>
                </div>
                <div class="review-card-r9l4">
                    <div class="review-stars-w6n3">★★★★★</div>
                    <p class="review-text-y4m7">"From concept to completion, CreativzHub delivered exceptional service. Their sustainable design approach aligned perfectly with our values, and the final result is both beautiful and environmentally responsible."</p>
                    <p class="review-author-k8p1">- Rachel Green, Environmental Consultant</p>
                </div>
                <div class="review-card-r9l4">
                    <div class="review-stars-w6n3">★★★★★</div>
                    <p class="review-text-y4m7">"CreativzHub transformed our restaurant space into an inviting atmosphere that our customers love. The design perfectly captures our brand identity while creating a comfortable dining experience. Highly recommended!"</p>
                                        <p class="review-author-k8p1">- Tony Marcelli, Restaurant Owner</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-container-h5j2" style="background: #f8f9fa;">
        <h2 class="section-title-n6m8">Why Choose CreativzHub</h2>
        <div class="services-grid-a9c1">
            <div class="service-card-t4y7">
                <div class="service-icon-u3r5">🎯</div>
                <h3 class="service-title-v8k4">Personalized Approach</h3>
                <p>Every project begins with understanding your unique lifestyle, preferences, and goals. We don't believe in one-size-fits-all solutions. Instead, we create custom designs that reflect your personality and meet your specific needs.</p>
            </div>
            <div class="service-card-t4y7">
                <div class="service-icon-u3r5">⏰</div>
                <h3 class="service-title-v8k4">Timely Delivery</h3>
                <p>We understand that renovation projects can disrupt your daily routine. Our experienced project management team ensures that all work is completed on schedule without compromising quality or attention to detail.</p>
            </div>
            <div class="service-card-t4y7">
                <div class="service-icon-u3r5">💰</div>
                <h3 class="service-title-v8k4">Budget Conscious</h3>
                <p>Great design doesn't have to break the bank. We work within your budget constraints to deliver maximum impact, offering creative solutions that provide excellent value for your investment.</p>
            </div>
            <div class="service-card-t4y7">
                <div class="service-icon-u3r5">🌱</div>
                <h3 class="service-title-v8k4">Sustainable Practices</h3>
                <p>We prioritize environmentally responsible design choices, sourcing sustainable materials and implementing energy-efficient solutions that benefit both your space and the planet.</p>
            </div>
            <div class="service-card-t4y7">
                <div class="service-icon-u3r5">🤝</div>
                <h3 class="service-title-v8k4">Collaborative Process</h3>
                <p>Your input is valuable throughout the entire design process. We maintain open communication and encourage feedback to ensure the final result exceeds your expectations.</p>
            </div>
            <div class="service-card-t4y7">
                <div class="service-icon-u3r5">🏆</div>
                <h3 class="service-title-v8k4">Award-Winning Team</h3>
                <p>Our designers have received recognition from industry organizations and publications for their innovative approaches and exceptional results in both residential and commercial projects.</p>
            </div>
        </div>
    </section>

    <section class="about-section-l7p9" style="background: linear-gradient(135deg, #74b9ff 0%, #0984e3 100%);">
        <div class="section-container-h5j2">
            <h2 class="section-title-n6m8" style="color: white;">Design Philosophy</h2>
            <div class="about-content-x2n6">
                <div class="about-text-q5w8">
                    <h3 style="color: #ddd; margin-bottom: 1rem;">Form Meets Function</h3>
                    <p>At CreativzHub, we believe that beautiful design must also be practical. Every element we incorporate serves a purpose while contributing to the overall aesthetic appeal of your space.</p>
                    <br>
                    <h3 style="color: #ddd; margin-bottom: 1rem;">Timeless Elegance</h3>
                    <p>While we stay current with design trends, our focus is on creating spaces that will remain stylish and relevant for years to come. We achieve this by balancing contemporary elements with classic design principles.</p>
                    <br>
                    <h3 style="color: #ddd; margin-bottom: 1rem;">Emotional Connection</h3>
                    <p>Great interior design should evoke positive emotions and create meaningful connections between people and their spaces. We strive to design environments that feel welcoming, inspiring, and truly feel like home.</p>
                </div>
                <div class="about-image-m9b3">
                    <img src="https://images.pexels.com/photos/1571472/pexels-photo-1571472.jpeg" alt="Design Philosophy Visualization">
                </div>
            </div>
        </div>
    </section>

    <section class="section-container-h5j2">
        <h2 class="section-title-n6m8">Frequently Asked Questions</h2>
        <div class="services-grid-a9c1">
            <div class="service-card-t4y7">
                <h3 class="service-title-v8k4">How long does a typical project take?</h3>
                <p>Project timelines vary depending on scope and complexity. A single room refresh might take 2-4 weeks, while a complete home renovation can take 8-12 weeks. We provide detailed timelines during the initial consultation phase.</p>
            </div>
            <div class="service-card-t4y7">
                <h3 class="service-title-v8k4">Do you work with existing furniture?</h3>
                <p>Absolutely! We love incorporating pieces that have sentimental value or are in good condition. Our designers are skilled at blending existing furniture with new elements to create cohesive, personalized spaces.</p>
            </div>
            <div class="service-card-t4y7">
                <h3 class="service-title-v8k4">What areas do you serve?</h3>
                <p>We primarily serve the metropolitan area and surrounding suburbs within a 50-mile radius. For larger commercial projects, we're willing to travel further. Contact us to discuss your specific location.</p>
            </div>
            <div class="service-card-t4y7">
                <h3 class="service-title-v8k4">Can you work within my budget?</h3>
                <p>We work with a wide range of budgets and pride ourselves on maximizing value regardless of project size. During our initial consultation, we'll discuss your budget and create a plan that delivers the best possible results within your financial parameters.</p>
            </div>
            <div class="service-card-t4y7">
                <h3 class="service-title-v8k4">Do you handle permits and contractors?</h3>
                <p>Yes, we can manage all aspects of your project including permit applications and contractor coordination. We have established relationships with reliable, licensed professionals in various trades.</p>
            </div>
            <div class="service-card-t4y7">
                <h3 class="service-title-v8k4">What makes your approach different?</h3>
                <p>Our collaborative approach sets us apart. We don't impose our style on your space; instead, we work to understand your vision and enhance it with our expertise, creating designs that truly reflect your personality and lifestyle.</p>
            </div>
        </div>
    </section>

    <footer id="contact" class="footer-main-g6s1">
        <div class="footer-content-i8v5">
            <div class="footer-section-o3r7">
                <h3>Contact Information</h3>
                <p>📍 2847 Riverside Drive, Suite 320<br>
                Springfield, IL 62704</p>
                <p>📧 hello@creativzhub.com</p>
                <p>📞 <a href="tel:+15559876543" class="phone-link-x9z4">(555) 987-6543</a></p>
                <p>🕒 Mon-Fri: 9:00 AM - 6:00 PM<br>
                Saturday: 10:00 AM - 4:00 PM</p>
            </div>
            <div class="footer-section-o3r7">
                <h3>Our Services</h3>
                <p><a href="#services">Residential Design</a></p>
                <p><a href="#services">Commercial Spaces</a></p>
                <p><a href="#services">Color Consultation</a></p>
                <p><a href="#services">Furniture Selection</a></p>
                <p><a href="#services">Lighting Design</a></p>
                <p><a href="#services">Space Planning</a></p>
            </div>
            <div class="footer-section-o3r7">
                <h3>Company</h3>
                <p><a href="#about">About Us</a></p>
                <p><a href="#history">Our Story</a></p>
                <p><a href="#portfolio">Portfolio</a></p>
                <p><a href="#reviews">Client Reviews</a></p>
                <p><a href="javascript:void(0)" onclick="openModal('privacy')">Privacy Policy</a></p>
                <p><a href="javascript:void(0)" onclick="openModal('terms')">Terms of Service</a></p>
            </div>
            <div class="footer-section-o3r7">
                <h3>Connect With Us</h3>
                <p>Follow our latest projects and design inspiration on social media. We regularly share tips, trends, and behind-the-scenes content from our current projects.</p>
                <br>
                <p>📧 Subscribe to our newsletter for monthly design tips and exclusive project previews.</p>
                <br>
                <p>Ready to transform your space? <a href="tel:+15559876543" class="phone-link-x9z4">Call us today!</a></p>
            </div>
        </div>
        <div style="text-align: center; padding: 2rem; border-top: 1px solid #34495e; margin-top: 2rem;">
            <p>© 2024 CreativzHub Interior Design. All rights reserved. | Licensed & Insured</p>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal" class="modal-overlay-q2w7">
        <div class="modal-content-e5r3">
            <span class="modal-close-t8y6" onclick="closeModal('privacy')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Information We Collect</h3>
            <p>CreativzHub collects information you provide directly to us, such as when you contact us for consultations, request quotes, or subscribe to our newsletter. This may include your name, email address, phone number, project details, and preferences.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to provide interior design services, communicate with you about your projects, send you updates about our services, and improve our offerings. We may also use your information to comply with legal obligations and protect our rights.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share information with trusted contractors and suppliers who assist in completing your projects, but only as necessary to provide our services.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
            
            <h3>Your Rights</h3>
            <p>You have the right to access, update, or delete your personal information. You may also opt out of receiving marketing communications from us at any time by contacting us directly.</p>
            
            <h3>Contact Us</h3>
            <p>If you have questions about this Privacy Policy, please contact us at hello@creativzhub.com or (555) 987-6543.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal" class="modal-overlay-q2w7">
        <div class="modal-content-e5r3">
            <span class="modal-close-t8y6" onclick="closeModal('terms')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Services</h3>
            <p>CreativzHub provides interior design consultation, space planning, furniture selection, and related design services. All services are subject to the terms outlined in individual service agreements.</p>
            
            <h3>Client Responsibilities</h3>
            <p>Clients are responsible for providing accurate information about their space, budget, and requirements. Clients must also ensure access to the property and obtain necessary permissions for any structural modifications.</p>
            
            <h3>Payment Terms</h3>
            <p>Payment schedules and terms are outlined in individual project agreements. Generally, we require a deposit to begin work, with remaining payments due according to project milestones.</p>
            
            <h3>Project Changes</h3>
            <p>Changes to approved designs may result in additional fees and extended timelines. All change requests must be submitted in writing and approved by both parties.</p>
            
            <h3>Intellectual Property</h3>
            <p>All design concepts, plans, and materials created by CreativzHub remain our intellectual property until full payment is received. Clients receive usage rights for their specific project upon completion of payment.</p>
            
            <h3>Limitation of Liability</h3>
            <p>CreativzHub's liability is limited to the amount paid for our services. We are not responsible for delays or issues caused by third-party contractors, suppliers, or circumstances beyond our control.</p>
            
            <h3>Termination</h3>
            <p>Either party may terminate the agreement with written notice. Clients are responsible for payment of all work completed up to the termination date.</p>
            
            <h3>Governing Law</h3>
            <p>These terms are governed by the laws of Illinois. Any disputes will be resolved through binding arbitration in Springfield, Illinois.</p>
        </div>
    </div>

    <script>
        function openModal(type) {
            document.getElementById(type + '-modal').style.display = 'block';
        }

        function closeModal(type) {
            document.getElementById(type + '-modal').style.display = 'none';
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            if (event.target.classList.contains('modal-overlay-q2w7')) {
                event.target.style.display = 'none';
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to navigation
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('.nav-container-x7k9');
            if (window.scrollY > 100) {
                nav.style.background = 'linear-gradient(135deg, rgba(44, 62, 80, 0.95), rgba(52, 73, 94, 0.95))';
                nav.style.backdropFilter = 'blur(10px)';
            } else {
                nav.style.background = 'linear-gradient(135deg, #2c3e50, #34495e)';
                nav.style.backdropFilter = 'none';
            }
        });

        // Animate elements on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe service cards and other elements
        document.querySelectorAll('.service-card-t4y7, .review-card-r9l4, .specialty-item-d9f4').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    </script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>




