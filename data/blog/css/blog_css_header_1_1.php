 <style>
   body {
     margin: 0;
     font-family: 'Segoe UI', Tahoma, sans-serif;
 
   }

   /* --- NAVIGATION --- */
   nav {
     background-color: #111;
     color: #f5f5f5;

     padding: 12px 20px;
     display: flex;
     justify-content: space-between;
     align-items: center;
     position: sticky;
     top: 0;
     z-index: 10;
   }

   nav .logo {
     font-weight: bold;
     font-size: 1.2rem;
     color: #ffbf00;
     text-decoration: none;
   }

   nav ul {
     list-style: none;
     display: flex;
     gap: 24px;
     margin: 0;
     padding: 0;
   }

   nav a {
     color: #ddd;
     text-decoration: none;
     font-weight: 600;
     position: relative;
   }

   nav a:hover {
     color: #fff;
   }

   nav a::after {
     content: "";
     position: absolute;
     left: 0;
     bottom: -2px;
     height: 2px;
     width: 0;
     background: #ffbf00;
     transition: width 0.3s ease;
   }

   nav a:hover::after {
     width: 100%;
   }

   /* --- BURGER BUTTON --- */
   .burger {
     display: none;
     flex-direction: column;
     gap: 5px;
     cursor: pointer;
   }

   .burger div {
     width: 25px;
     height: 3px;
     background: #fff;
     border-radius: 2px;
   }

   /* --- MENU MOBILE --- */
   @media (max-width: 768px) {
     nav ul {
       display: none;
       flex-direction: column;
       background: #111;
       position: absolute;
       top: 60px;
       right: 20px;
       padding: 12px;
       border-radius: 6px;
     }

     nav ul.active {
       display: flex;
     }

     .burger {
       display: flex;
     }
   }

   /* --- FOOTER --- */
   footer {
     text-align: center;
     padding: 24px 0;
     background: #111;
     color: #777;
   }
 </style>