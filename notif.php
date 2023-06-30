<!DOCTYPE html>
<html>
<head>
  <title>Notifikasi Checkout Berhasil</title>
  <style>
    /* Gaya dasar */
    body {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #2c2b2a;
    }

    .notification {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    h1 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    p {
      font-size: 18px;
      margin-bottom: 20px;
    }

    button {
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      background-color: #820F0F;
      color: #ffffff;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="notification">
    <h1>Checkout Berhasil!</h1>
    <p>Terima kasih telah melakukan pembelian. Pesanan Anda akan segera diproses.</p>
    <button onclick="window.location.href='Dashboard.php'">Kembali ke Dashboard</button>
  </div>
</body>
</html>
