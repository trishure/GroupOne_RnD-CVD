<link rel="stylesheet" href="style.css">
<?php include 'navbars.html';
$bannerTitle = "Researcher"; ?>

<!-- BANNER -->
<?php include 'banner.php'; ?>

<style>
    .card-wrapper {
        display: flex
;
    width: 89vw;
    margin-left: 129px;
    gap: 17px;
    flex-direction: row;
    flex-wrap: wrap;
    }
    .card-container {
        width: 285px;
    height: 335px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    padding: 20px;
    box-sizing: border-box;
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Add transition for smooth effect */
    }

    .card-container:hover {
        transform: translateY(-10px); /* Move the card up */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Increase shadow */
    }

    .card-container img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-bottom: 20px;
    }

    .card-container h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .card-container p {
        font-size: 16px;
        margin-bottom: 10px;
    }

</style>

<!-- RESEARCHER CARDS -->
<div class="card-wrapper">
    <div class="card-container">
        <img src="img/profile.png" alt="image">
        <h2>Dr. John Doe</h2>
        <p>Researcher</p>
        <p>University of California, Berkeley</p>
    </div>
    

</div>