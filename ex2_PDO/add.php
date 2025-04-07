<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add Student</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="p-5">
  <h1 class="mb-4">Add a New Student</h1>

  <form action="ajoutEtud.php" method="post">
    <div class="form-floating mb-3">
      <input type="text" name="id" class="form-control" id="floatingId" placeholder="Give an ID" required>
      <label for="floatingId">Student ID</label>
    </div>

    <div class="form-floating mb-3">
      <input type="text" name="nom" class="form-control" id="floatingName" placeholder="Student name" required>
      <label for="floatingName">Name</label>
    </div>

    <div class="form-floating mb-3">
      <input type="text" name="birthday" class="form-control" id="floatingBirthday" placeholder="Birth date (YYYY-MM-DD)" required>
      <label for="floatingBirthday">Birthday</label>
    </div>

    <div class="form-floating mb-3">
      <input type="text" name="section" class="form-control" id="floatingSection" placeholder="Section" required>
      <label for="floatingSection">Section</label>
    </div>

    <div class="form-floating mb-4">
      <input type="text" name="url" class="form-control" id="floatingImage" placeholder="Image URL" required>
      <label for="floatingImage">Image URL</label>
    </div>

    <input type="submit" class="btn btn-primary" value="Add Student">
  </form>
</body>
</html>
