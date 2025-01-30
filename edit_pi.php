<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="edit_pi.css">
  </head>
  <body>
    
    <div class="container-fluid head fs-1 m-0 py-3 d-flex align-items-center justify-content-between">
        <button type="button" onclick="window.location.href='admin.html'" aria-label="Go Back" class="back align-items-center"><img src="images/back.png" alt="" width="24" height="30" class="bac"></button>
        <h2 class="title fw-bold mx-auto">Editing Program & Initiatives</h2>
    </div>
    <div class="container-fluid form-cont">
      <form action="edit_pi_update.php" method="POST" enctype="multipart/form-data">
          <div class=" p-5">
            <label for="exampleInputEmail1" class="form-label d-inline fw-bolder">Title :</label>
            <select name="title_id" class="form-select d-inline w-75" aria-label="Default select example">
              <option selected>Select title below</option>
              <?php include 'edit_pi_1.php';?>
              <?php foreach ($options as $option): ?>
                <option value="<?= $option['sl'] ; ?>"><?= htmlspecialchars($option['title']); ?></option> 
              <?php endforeach; ?>
            </select>
          </div>
          <div class=" p-5 d-flex flex-row align-items-start">
            <label for="exampleInputEmail1" class="form-label fw-bolder">Description :</label>
            <textarea name="description" class="form-control w-75 ms-1" id="description" rows="3"></textarea>
          </div>
          <div class=" p-5">
            <label for="exampleInputEmail1" class="form-label d-inline fw-bolder">Image :</label>
            <input name="image" class="form-control d-inline w-75" type="file" id="image">
          </div>

          <button type="submit" class="btn btn-primary w-50 ms-5">Submit</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>