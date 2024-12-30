<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collections Template</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .collection-item {
            text-align: center;
            margin-bottom: 30px;
            transition: transform 0.3s;
        }

        .collection-item:hover {
            transform: scale(1.05);
            cursor: pointer;
        }

        .collection-item img {
            width: 100%;
            height: auto;
        }

        .collection-item h5 {
            margin-top: 15px;
            font-weight: bold;
        }

        .collections-section {
            padding: 50px 0;
        }
    </style>
</head>

<body>
    <div class="container collections-section">
        <h2 class="text-center mb-5">Collections</h2>
        <div class="row">
			<div class="col-md-3 collection-item">
				<a href="practice.html"> <!-- Use target="_blank" to open in a new tab -->
					<img src="Keychains/main.jpg" alt="Pigments" class="img-fluid">
				</a>
				<h5>Keychains</h5>
			</div>

            <div class="col-md-3 collection-item" onclick="openPage()">
                <img src="Keychains/main.jpg" alt="Silicon Moulds" class="img-fluid">
                <h5>Ornaments</h5>
            </div>
			<div class="col-md-3 collection-item">
                <img src="Keychains/main.jpg" alt="Silicon Moulds" class="img-fluid">
                <h5>Preservation</h5>
            </div>
            <div class="col-md-3 collection-item">
                <img src="Keychains/main.jpg" alt="Crystals and Stones" class="img-fluid">
                <h5>Rakhi Making</h5>
            </div>
            <div class="col-md-3 collection-item">
                <img src="Keychains/main.jpg" alt="Tools" class="img-fluid">
                <h5>Bookmark</h5>
            </div>
			<div class="col-md-3 collection-item" onclick="openPage()">
                <img src="Keychains/main.jpg" alt="Pigments" class="img-fluid">
                <h5>Weddings Things</h5>
            </div>
            <div class="col-md-3 collection-item">
                <img src="Keychains/main.jpg" alt="Silicon Moulds" class="img-fluid">
                <h5>Drink coaster</h5>
            </div>
            <div class="col-md-3 collection-item">
                <img src="Keychains/main.jpg" alt="Silicon Moulds" class="img-fluid">
                <h5>Paper Weight</h5>
            </div>
            
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        function openPage() {
            window.location.href = 'yo.html';
        }
    </script>
</body>

</html>
