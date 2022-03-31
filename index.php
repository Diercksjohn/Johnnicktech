<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>JohnickTech Portfolio Website</title>
</head>
<body>
    <!-- got all of the styles for this page from bootstrap.com -->
    <!-- was thinking about using an image or particle effect for the background of the main page -->
    <nav class="nav">
        <!-- where the navigation is going to go -->
        <ul class="justify-left">
            <li class="nav-link">JohnickTech logo here</li>
        </ul>
        <ul class="container justify-content-center align-center d-flex flex-row">
            <a href="" class="nav-link">About</a>
            <a href="" class="nav-link">Web Development and Design</a>
            <a href="" class="nav-link">Computer Repair</a>
        </ul>
        <ul class="justify-left">
            <a href="" class="nav-link">Contact</a>
        </ul>
    </nav>

    <div class="px-4 py-5 my-5 text-center">
        <h1 class="d-flex justify-content-center">JohnickTech</h1>
        <h1 class="d-flex justify-content-center">Insert Subheading here</h1>
    </div>
    

    <!-- was going to put this on top of the main header page and make the logo a link -->
    <section class="container text-center">
        <!-- about - all is just filler text for now-->
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit cumque iure ab officia vitae doloremque odio nobis ratione! Saepe officiis nobis, autem omnis quaerat excepturi eaque deleniti sint delectus repellat.
        Praesentium neque ut repellat molestias est adipisci obcaecati officiis. Consequatur, quo explicabo, sapiente recusandae facilis delectus laudantium aliquam consectetur ullam cum excepturi, tempora necessitatibus sed exercitationem minima expedita distinctio at.
        Dignissimos alias dolores id, nostrum suscipit vero eveniet totam nesciunt hic laborum qui sint delectus ullam beatae nihil tenetur numquam ducimus eligendi quisquam ratione est sequi pariatur consequuntur doloribus. Sit.
        Aperiam harum sunt suscipit consequuntur dolore, tempora quas culpa neque, voluptatibus praesentium perferendis nisi velit expedita molestiae voluptate laboriosam! Doloribus cumque in veritatis incidunt delectus ullam. Magni natus praesentium itaque!
        Quo dolor, eius sunt tenetur quisquam architecto magnam laborum voluptatibus eos ullam qui non odit aliquam consequuntur vel mollitia? Quisquam quam nulla fugiat alias labore nobis aperiam ex laudantium consequatur.
    </section>
    <section id="form" class="container">
        <!-- contact form -->
        <!-- used bootstrap to style all of the form -->
        <form action="index.php" method="POST" id="form_main" class="d-flex flex-column">
            <div class="input-group">
                <input type="text" class="form-control" id="floatingInput" placeholder="First Name">
                <label for="floatingInput"></label>
                <input type="text" class="form-control" id="floatingInput" placeholder="Last Name">
                <label for="floatingInput"></label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput"></label>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2"></label>
            </div>
            <button class="btn btn-outline-secondary" type="Submit" value="Submit">Send Message</button>
        </form>
    </section>
    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>