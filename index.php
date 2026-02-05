<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Silver – Future Tech Store</title>

<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&family=Rajdhani:wght@400;600&display=swap" rel="stylesheet">

    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/69733b1558104b1978d41cb5/1jfl1tjkf';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<style>
*{margin:0;padding:0;box-sizing:border-box}
body{
  font-family:'Rajdhani',sans-serif;
  background:#0a0a0f;
  color:#eaeaea;
  overflow-x:hidden;
}

/* NEON COLORS */
:root{
  --neon-green:#39ff14;
  --neon-pink:#ff2fd1;
}

/* HEADER */
header{
  position:fixed;
  top:0;
  width:100%;
  background:#000;
  border-bottom:2px solid var(--neon-green);
  text-align:center;
  padding:25px 10px;
  z-index:1000;
  box-shadow:0 0 15px var(--neon-pink);
}
header h1{
  font-family:'Orbitron',sans-serif;
  color:var(--neon-green);
  letter-spacing:3px;
  font-size:34px;
  text-shadow:0 0 10px var(--neon-green);
}
nav{margin-top:10px}
nav a{
  color:var(--neon-pink);
  margin:0 15px;
  text-decoration:none;
  font-weight:600;
  transition:.3s;
}
nav a:hover{
  color:var(--neon-green);
  text-shadow:0 0 8px var(--neon-green);
}

/* LAYOUT */
.container{max-width:1200px;margin:auto;padding:170px 20px 60px}
section{margin-bottom:120px}
h2{
  font-family:'Orbitron',sans-serif;
  color:var(--neon-green);
  margin-bottom:20px;
  text-shadow:0 0 8px var(--neon-green);
}

/* HERO */
.hero{
  background:url('https://images.unsplash.com/photo-1518779578993-ec3579fee39f?auto=format&fit=crop&w=1500&q=80') center/cover;
  padding:160px 30px;
  border-radius:12px;
  text-align:center;
  box-shadow:0 0 40px var(--neon-pink);
}
.hero h2{font-size:48px;color:white}
.hero p{max-width:800px;margin:20px auto;font-size:20px}
.btn{
  background:var(--neon-green);
  color:black;
  padding:12px 28px;
  border:none;
  border-radius:30px;
  font-weight:bold;
  cursor:pointer;
  box-shadow:0 0 12px var(--neon-green);
  transition:.3s;
}
.btn:hover{
  background:var(--neon-pink);
  box-shadow:0 0 15px var(--neon-pink);
  color:white;
}

/* PRODUCT GRID */
.grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:30px;
}
.card{
  background:#111;
  border:1px solid var(--neon-pink);
  border-radius:12px;
  overflow:hidden;
  box-shadow:0 0 15px rgba(255,47,209,0.3);
  transition:.4s;
}
.card:hover{
  transform:translateY(-10px);
  box-shadow:0 0 25px var(--neon-green);
}
.card img{width:100%;height:220px;object-fit:cover}
.card-content{padding:18px;text-align:center}
.price{color:var(--neon-green);font-size:18px;margin:10px 0}

/* INFO BOX */
.box{
  background:#111;
  padding:40px;
  border-radius:12px;
  border:1px solid var(--neon-green);
  box-shadow:0 0 20px rgba(57,255,20,0.2);
  line-height:1.9;
  font-size:18px;
}

/* FOOTER */
footer{
  background:#000;
  padding:60px 20px;
  border-top:2px solid var(--neon-pink);
  box-shadow:0 0 15px var(--neon-pink);
}
.footer-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:40px;
}
footer h3{color:var(--neon-green);margin-bottom:15px}
footer a{color:#ccc;text-decoration:none;display:block;margin-bottom:8px}
footer a:hover{color:var(--neon-pink)}
</style>

<script>
function go(id){document.getElementById(id).scrollIntoView({behavior:'smooth'})}
</script>
</head>
<body>

<header>
  <h1>SILVER</h1>
  <nav>
    <a onclick="go('home')">Home</a>
    <a onclick="go('products')">Products</a>
    <a onclick="go('about')">About</a>
    <a onclick="go('innovation')">Innovation</a>
    <a onclick="go('contact')">Contact</a>
  </nav>
</header>

<div class="container">

<!-- HERO -->
<section id="home" class="hero">
  <h2>Future Technology. Today.</h2>
  <p>Silver is a next-generation tech store delivering cutting-edge gadgets, smart devices, and futuristic electronics designed to upgrade the way you live, work, and play.</p>
  <button class="btn" onclick="go('products')">Explore Tech</button>
</section>

<!-- PRODUCTS (8 IMAGES) -->
<section id="products">
  <h2>Featured Devices</h2>
  <div class="grid">
    <div class="card"><img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=800&q=80"><div class="card-content"><h3>Ultra Laptop</h3><div class="price">$1299</div></div></div>
    <div class="card"><img src="https://images.unsplash.com/photo-1510557880182-3b3e3d4c3d2d?auto=format&fit=crop&w=800&q=80"><div class="card-content"><h3>VR Headset</h3><div class="price">$499</div></div></div>
    <div class="card"><img src="https://images.unsplash.com/photo-1518444028785-8fbcd101ebb9?auto=format&fit=crop&w=800&q=80"><div class="card-content"><h3>Smart Watch</h3><div class="price">$299</div></div></div>
    <div class="card"><img src="https://images.unsplash.com/photo-1585386959984-a4155224a1ad?auto=format&fit=crop&w=800&q=80"><div class="card-content"><h3>Gaming Console</h3><div class="price">$599</div></div></div>
    <div class="card"><img src="https://images.unsplash.com/photo-1519183071298-a2962eadc6b4?auto=format&fit=crop&w=800&q=80"><div class="card-content"><h3>Wireless Earbuds</h3><div class="price">$149</div></div></div>
    <div class="card"><img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit=crop&w=800&q=80"><div class="card-content"><h3>Smartphone Pro</h3><div class="price">$999</div></div></div>
    <div class="card"><img src="https://images.unsplash.com/photo-1516117172878-fd2c41f4a759?auto=format&fit=crop&w=800&q=80"><div class="card-content"><h3>Drone Cam</h3><div class="price">$799</div></div></div>
    <div class="card"><img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=800&q=80"><div class="card-content"><h3>Studio Headphones</h3><div class="price">$199</div></div></div>
  </div>
</section>

<!-- ABOUT (LONG CONTENT) -->
<section id="about">
  <h2>About Silver</h2>
  <div class="box">
    Silver was founded with a single mission: to bring the future of technology closer to people who crave innovation, performance, and design. We believe technology is not just about hardware — it is about experiences, lifestyle transformation, and unlocking human potential. Our store curates advanced gadgets that blend engineering excellence with modern aesthetics. From AI-powered devices to immersive entertainment systems, every product we offer represents a step toward smarter living.<br><br>

    At Silver, we constantly research global tech trends, startup breakthroughs, and next-gen digital solutions. Our team is passionate about innovation, and we work closely with manufacturers who push the boundaries of design and performance. We ensure every device meets our strict standards for quality, durability, and futuristic appeal. Shopping with Silver means investing in technology that stays relevant for years to come.<br><br>

    Beyond selling products, we build a community of tech enthusiasts. We share insights, product education, and innovation stories that help our customers understand how technology shapes the modern world. Silver is not just a store — it is a hub for digital progress.
  </div>
</section>

<!-- INNOVATION -->
<section id="innovation">
  <h2>Innovation & Vision</h2>
  <div class="box">
    The world is evolving faster than ever, and Silver stands at the forefront of this transformation. Our vision is to make advanced technology accessible while keeping it stylish and intuitive. We focus on smart ecosystems where devices connect seamlessly — from wearable tech that monitors health to home systems that respond to voice commands and AI learning patterns.<br><br>

    We believe the future lies in integration. That is why Silver supports technologies built around AI, machine learning, IoT connectivity, and immersive digital experiences. Our innovation team constantly studies how technology can improve productivity, creativity, and everyday convenience. Silver’s roadmap includes expanding into smart home solutions, robotics accessories, and eco-friendly tech products that reduce environmental impact.<br><br>

    When you shop with Silver, you are not just buying a gadget — you are stepping into the future of connected living.
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <h2>Contact Silver</h2>
  <div class="box">
    Have questions about our futuristic gadgets or need help choosing the perfect device? Our tech experts are ready to help.<br><br>
    Email: support@silvertech.com<br>
    Phone: +1 800 777 2026<br>
    Address: Silicon Avenue, Innovation City<br><br>
    Silver customer support operates Monday through Saturday, ensuring every tech journey is smooth and satisfying.
  </div>
</section>

</div>

<footer>
  <div class="footer-grid">
    <div>
      <h3>Silver Tech Store</h3>
      <p>Leading the future of innovation with neon-powered style and cutting-edge devices.</p>
    </div>
    <div>
      <h3>Quick Links</h3>
      <a href="#">Shop</a>
      <a href="#">New Arrivals</a>
      <a href="#">Best Sellers</a>
      <a href="#">Support</a>
    </div>
    <div>
      <h3>Policies</h3>
      <a href="#">Privacy Policy</a>
      <a href="#">Returns</a>
      <a href="#">Warranty</a>
      <a href="#">Terms</a>
    </div>
  </div>
  <p style="text-align:center;margin-top:40px;">© <?php echo date("Y"); ?> Silver. All rights reserved.</p>
</footer>

</body>
</html>
