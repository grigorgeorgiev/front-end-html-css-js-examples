<style>
  @media(min-width: 468px){
     .container-1{
    display: flex; 
    
    /* vertical boxes */
    flex-directon: column;
  }
  
  .container-2{
    display: flex; 
    /* default:
    justify-content: flex-start;
    */
    /* float in right:
    justify-content: flex-end;
    */
    /* float in center without margins between them:
    justify-content: center;
    */
    /* space between them but without margins in left and right
    justify-content: space-between;
    */
    /* space around left and right every box
    justify-content: space-around;
    */
    
    justify-content: space-between;
    
  }
    
  }
  
  
 

  .container-1 div, .container-2 div{
    border: 1px #ccc solid;
    padding: 10px;
  }
  
  .box-1{
    /* width */
    /* flex: 1; */
    
    /* order */
    /* order: 1; */
  }
  
  .box-2{
    
  }
  
  .box-3{
    
  }
  
  .container-2-box{
    /* width: 27%; */
    flex-basis: 27%;
  }
  
</style>

<div class="container-1">
  <div class="box-1">
    <h3>Box One</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
  <div class="box-2">
    <h3>Box Two</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
  <div class="box-3">
    <h3>Box Three</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
</div>

<div class="container-2">
  <div class="container-2-box">
    <h3>Box Four</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
  <div class="container-2-box">
    <h3>Box Five</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
  <div class="container-2-box">
    <h3>Box Six</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
</div>
