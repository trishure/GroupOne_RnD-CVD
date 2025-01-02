<link rel="stylesheet" href="style.css">
<?php include 'navbars.html';
$bannerTitle = "Projects";
 ?>
<?php include 'banner.php'; ?>

<div class="container">
    <h1>Recent designs</h1>
    <div class="design-grid">
      <div class="design-card">
        <div class="design-thumbnail"></div>
        <p class="design-title">Untitled Project</p>
       
      </div>
      <div class="design-card">
        <div class="design-thumbnail"></div>
        <p class="design-title">Untitled Project</p>
       
      </div>
      <div class="design-card">
        <div class="design-thumbnail"></div>
        <p class="design-title">Untitled Project</p>
        
      </div>
      <div class="design-card">
        <div class="design-thumbnail"></div>
        <p class="design-title">Untitled Project</p>
       
      </div>
      <div class="design-card">
        <div class="design-thumbnail"></div>
        <p class="design-title">hello</p>
      
      </div>
    </div>
  </div>

  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f8f8f8;
}

.container {
    max-width: 1200px;
    padding: 0 20px;
    margin-left: 108px;
}

h1 {
  font-size: 24px;
  color: #333;
  margin-bottom: 20px;
}

.design-grid {
    display: grid
;
    grid-template-columns: repeat(auto-fill, minmax(210px, 5fr));
    gap: 37px;
    width: 113%;

}

.design-card {
  background: #fff;
  border: 1px solid #ddd;
  border-radius: 8px;
  padding: 10px;
  text-align: center;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease; /* Add transition for smooth effect */
}

.design-card:hover {
        transform: translateY(-10px); /* Move the card up */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Increase shadow */
    }

.design-thumbnail {
  width: 100%;
  height: 201px;
  background-color: #eaeaea;
  border-radius: 4px;
  margin-bottom: 10px;
}

.design-title {
  font-size: 16px;
  font-weight: bold;
  color: #555;
  margin: 0 0 5px;
}

.design-subtitle {
  font-size: 14px;
  color: #888;
  margin: 0;
}

  </style>
  