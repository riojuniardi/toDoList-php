<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List APP</title>
</head>
<body>
    <h1>Todo List APP</h1>

    <!-- form input -->
     <form action="">
        <label >Input tugas hari ini</label>
        <input type="text" name="todo">
        <button type="submit">Simpan</button>
     </form>

     <!-- list todo -->
      <ul>
        <li>
            <input type="checkbox" name="todo">
            <label>Belajar PHP</label>
            <a href="#">Hapus</a>
        </li>
        <li>
            <input type="checkbox" name="todo">
            <label>Belajar CSS</label>
            <a href="#">Hapus</a>
        </li>
        <li>
            <input type="checkbox" name="todo">
            <label>Belajar Javascript</label>
            <a href="#">Hapus</a>
        </li>
      </ul>
</body>
</html>