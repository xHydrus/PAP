<h3 id="texto2"><strong>3. O que fazemos</strong></h3>
<div class="row linhacarta">
      <div class="cartad">
         <div class="cartah">
            <img src="./images/sketch (1).png" class="imagemcard" alt="">
            <h3>Branding</h3>
         </div>
         <div class="cartab">
            <p>
               Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            </p>
         </div>
      </div>
      <div class="cartad">
         <div class="cartah">
            <img src="./images/data.png" class="imagemcard" alt="">
            <h3>Web Design</h3>
         </div>
         <div class="cartab">
            <p>
               Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            </p>
         </div>
      </div>
      <div class="cartad">
         <div class="cartah">
            <img src="./images/advertising.png" class="imagemcard" alt="">
            <h3>Social Media</h3>
         </div>
         <div class="cartab">
            <p>
               Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            </p>
         </div>
      </div>
</div>
<style>
.linhacarta{
  display: flex;
  width: 100%;
  justify-content: space-around;
  flex-flow: wrap;
}
.cartad{
  width: 20%;
  background: white;
  border: 1px solid #ccc;
  margin-bottom: 5%;
  margin-top: 5%;
  transition: 0.3s;
  opacity: 0.3;
  transition: 0.3s;
}
.cartah{
  text-align: center;
  padding: 30px;
  background: linear-gradient(to right, #ff416c, crimson);
  color: #fff;
}
.cartad:hover, .cartah:hover{
    opacity: 1;
}
.cartab{
  padding: 30px 20px;
  text-align: center;
  font-size: 18px;

}
.cartad:hover{
  transform: scale(1.05);
  box-shadow: 0 0 40px -10px rgba(0, 0, 0, 0.5);
}
.imagemcard{
    width: 40%;
    padding-bottom: 20px;
}
@media screen and (max-width:1000px){
   .cartad{
      width: 40%;
   }
}
@media screen and (max-width:700px){
   .cartad{
      width: 60%;
   }
}
@media screen and (max-width:500px){
   .cartad{
      width: 60%;
   }
}
</style>