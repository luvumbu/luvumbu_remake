 <style>
   .div_elements {
     display: flex;
     justify-content: space-around;
     flex-wrap: wrap;
   }

   .form-container {
     width: 400px;
     padding: 25px;
     background: #ffffff;
     border-radius: 12px;
     box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
     text-align: center;
     border: 1px solid #d1d1d1;
   }

   .form-container h2 {
     color: #1a1a1d;
     font-size: 18px;
     margin-bottom: 15px;
   }

   .form-container form {
     display: flex;
     flex-direction: column;
     align-items: center;
   }

   .form-container label {
     width: 100%;
     text-align: left;
     margin-bottom: 5px;
     font-size: 14px;
     color: #333;
   }

   .form-container input {
     width: calc(100% - 20px);
     padding: 10px;
     margin-bottom: 12px;
     border: 1px solid #ccc;
     border-radius: 6px;
     font-size: 14px;
     background: #fafafa;
     color: #1a1a1d;
     outline: none;
   }

   .form-container input:focus {
     border-color: #007bff;
   }

   .password_forgot,
   .inscrption {
     margin-top: 8px;
     text-align: center;
     width: 100%;
   }

   .password_forgot a,
   .inscrption a {
     text-decoration: none;
     color: #007bff;
     font-size: 13px;
     font-weight: bold;
     display: inline-block;
     padding: 5px 0;
   }

   .password_forgot a:hover,
   .inscrption a:hover {
     text-decoration: underline;
   }

   .submit-btn {
     margin-top: 15px;
     width: 100%;
     padding: 10px;
     background: #007bff;
     color: white;
     text-align: center;
     font-weight: bold;
     cursor: pointer;
     border-radius: 6px;
     font-size: 14px;
     transition: background 0.2s ease-in-out;
   }

   .submit-btn:hover {
     background: #0056b3;
   }


   .card {
     background-color: #fff;
     border-radius: 12px;
     box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
     overflow: hidden;
     width: 400px;
     transition: transform 0.3s ease;
   }

   .card:hover {
     transform: translateY(-5px);
   }

   .card img {
     width: 100%;
     height: 300px;
     object-fit: cover;
     /* Important : permet de recadrer sans déformer */
     display: block;
   }

   .card-content {
     padding: 20px;
   }

   .card-content h2 {
     font-size: 1.4em;
     margin-bottom: 10px;
     color: #333;
   }

   .card-content p {
     font-size: 0.95em;
     color: #666;
     margin-bottom: 15px;

   }

   .btn {
     display: inline-block;
     padding: 10px 16px;
     background-color: #007bff;
     color: #fff;
     text-decoration: none;
     border-radius: 8px;
     transition: background-color 0.3s ease;
   }

   .btn:hover {
     background-color: #0056b3;
   }

   body {
     width: 90%;
     margin: auto;
   }

   .p_img {
     width: 100%;
     margin: auto;

     text-align: center;
     margin-top: 80px;
     margin-bottom: 80px;



   }

   .p_img img {
     width: 380px;
     text-align: center;
     border-radius: 7px;
   }

   .p_img_1 img {
     box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.8);
   }

   .p_img_1 img:hover {
     box-shadow: 2px 2px 8px rgba(0, 0, 0, 1);

   }

   .cursor_pointer:hover {
     cursor: pointer;
     transition: 1s all;
   }

   .cursor_pointer {

     transition: 1s all;
   }

   .date_originale {
     color: rgba(0, 0, 0, 0.5);
     font-size: 12px;

   }


   .form-container {

     width: 50%;
     margin: auto;
     text-align: center;
     margin-top: 55px;
     transition: 1s all;
   }

   input {
     margin-top: 15px;
   }

   @media (max-width: 800px) {

     .form-container {

       width: 80%;
       margin: auto;
       text-align: center;
       transition: 1s all;
     }
   }
 </style>