<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paws Hunger</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #d0e7ff;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ffffff;
            padding: 10px 20px;
            height: 70px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar a {
            text-decoration: none;
            color: #333;
            margin: 0 15px;
            font-weight: bold;
            display: inline-block;
            font-size: 1.2em;
        }
        .navbar a:hover {
            color: #007BFF;
        }
        .navbar button {
            background-color: #add8e6;
            color: #000;
            border: none;
            padding: 15px 30px;
            cursor: pointer;
            border-radius: 20px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .navbar button:hover {
            background-color: #87cefa;
        }
        .hero {
            position: relative;
            text-align: left;
            height: 620px;
            background-color: #b3daff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 0 50px;
        }
        .hero h1 {
            margin: 0;
            font-size: 3em;
            color: #333;
            font-weight: normal;
        }
        .hero p {
            font-size: 1.5em;
            color: #666;
            margin: 20px 0;
        }
        .hero button {
            background-color: #FFFFFF;
            color: #000000;
            border: none;
            padding: 15px 30px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 20px;
        }
        .hero button:hover {
            background-color: #0056b3;
        }
        .hero img {
            position: absolute;
            top: 70px;
            right: 20px;
            max-width: 1000px;
            height: auto;
        }
        .logo {
            display: flex;
            align-items: center;
        }
        .logo img {
            height: auto;
            max-width: 100px;
            margin-right: 10px;
        }
        .logo-text {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .logo-text span {
            font-size: 1.5em;
            color: #333;
            font-weight: bold;
        }
        .logo-text .sub-text {
            font-size: 1.2em;
            font-weight: bold;
        }
        .logo-text .paw {
            font-size: 1.2em;
            font-weight: bold;
        }
        .mission-section {
            background-color: #ffffff;
            padding: 50px 20px;
            text-align: center;
            height : 600px;
        }
        .mission-section h2 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 20px;
        }
        .mission-section p {
            font-size: 1.2em;
            color: #666;
            line-height: 1.6;
            margin: 20px 0;
        }
        .mission-section .mission-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            max-width: 1200px;
            margin: 50px auto 0;
        }
        .mission-section img {
            max-width: 45%;
            height: auto;
            margin-right: 20px;
            margin-left: -10px;
            margin-top: 20px;
            border-radius: 10px;
        }
        .mission-section .text-content {
            max-width: 600px;
            text-align: left;
            margin-left: 80px;
        }
        .mission-section .text-content h3 {
            font-size: 1.5em;
            color: #333;
            margin-top: 0;
        }
        @media (max-width: 768px) {
            .mission-section .mission-content {
                flex-direction: column;
            }
            .mission-section img {
                max-width: 100%;
                margin-right: 0;
                margin-left: 0;
                margin-bottom: 20px;
            }
            .mission-section .text-content {
                margin-left: 0;
            }
        }
        .support-section {
            background-color: #f5f5f5;
            padding: 50px 20px;
            text-align: center;
        }

        .support-section h2 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 10px;
            margin-top: 50px;
        }
        .welcome-text {
            font-size: 1.5em;
            color: #87cefa;
            margin: 10px 0;
            
        }
        .support-section p {
            font-size: 1.2em;
            color: #666;
            line-height: 1.6;
            margin: 20px 0;
        }
        .support-options {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .option img {
            max-width: 250px;
            height: auto;
            margin-bottom: 10px;
        }
        .option p {
            font-size: 1.2em;
            color: #333;
            margin: 0;
        }
        @media (max-width: 768px) {
            .support-options {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

<div class="navbar">
    <div class="logo">
        <img src="Logo.png" alt="Paws Hunger Logo">
        <div class="logo-text">
            <span class="paw">Paws</span>
            <span class="sub-text">Hunger</span>
        </div>
    </div>
    <div class="nav-links">
        <a href="#">About Us</a>
        <a href="#">Volunteer</a>
        <a href="#">Adoptions</a>
        <a href="#">Contact</a>
    </div>
    <button>Donate</button>
</div>

<div class="hero">
    <h1>Feeding Hope, One Paw at a Time.</h1>
    <p>Join Us in Nourishing Stray Animals and Building a Kinder Community.</p>
    <button>Join Us</button>
    <img src="pic.png" alt="Dog and Cat">
</div>

<div class="mission-section">
    <div class="mission-content">
        <img src="Mission.png" alt="Mission Image">
        <div class="text-content">
            <h2>Our Mission</h2>
            <p><strong>Adopt a holistic approach to animal welfare.</strong></p>
            <p>We aim to provide effective, personalized healthcare for animals in distress.</p>
            <p>Reduce stray animal population and puppy mills through adoption promotion.</p>
            <p>Eradicate disease and control stray populations via vaccination and sterilization.</p>
            <p>Foster compassion, respect for animals, and community engagement in animal welfare.</p>
        </div>
    </div>
</div>

<div class="support-section">
    <h2>At Paws Hunger</h2>
    <p class="welcome-text">We Welcome Everyone!</p>
    <p>You can support Pawshunger's mission to care for stray animals by volunteering, joining our team, or donating today!</p>
    <div class="support-options">
        <div class="option">
            <img src="Volunteer.png" alt="Volunteer Icon">
            <p>Volunteer</p>
        </div>
        <div class="option">
            <img src="Donate.png" alt="Donate Icon">
            <p>Donate</p>
        </div>
        <div class="option">
            <img src="Collaborate.png" alt="Collaborate Icon">
            <p>Collaborate</p>
        </div>
    </div>
</div>
<h1>Hello World</h1>
<h2>HELLOOOOOO</h2>
</body>
</html>
