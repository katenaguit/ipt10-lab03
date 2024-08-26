<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #2</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.15.0.min.css">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #AA4A44;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .header img {
            max-width: 150px;
            margin: 0 20px;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            max-width: 1000px;
            margin: 20px auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .file-upload {
            flex: 1;
            margin-right: 20px;
        }

        .file-upload h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .p-card {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 8px;
            background-color: #f9f9f9;
            margin-bottom: 20px;
        }

        .p-card h3 {
            margin-top: 0;
            color: #AA4A44;
        }

        .p-card__content {
            margin: 10px 0;
        }

        button {
            background-color: #AA4A44;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #922e2b;
        }

        .logo-section {
            flex-shrink: 0;
        }

        .logo-section img {
            max-width: 200px;
        }
    </style>
</head>

<body>

    <div class="header">
        <img src="https://www.auf.edu.ph/home/images/logo2.png" alt="Angeles University Foundation">
    </div>

    <div class="container">
        <div class="file-upload">
            <h1>File Upload</h1>

            <form action="uploaded.php" method="post" enctype="multipart/form-data">
                <div class="p-card">
                    <h3>IMAGE File</h3>
                    <p class="p-card__content">
                        <input type="file" name="image_file" accept=".png, .jpg, .jpeg">
                    </p>
                </div>

                <button type="submit">Upload</button>
            </form>
        </div>

        <div class="logo-section">
            <img src="aufccs1.png" alt="College of Computing Studies">
        </div>
    </div>

</body>

</html>

