<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>2c</title>

  <style>
    .design {
      border-style: 1 px solid;
      border-width: 1px;
      background-color: hotpink;
    }
  </style>


</head>

<body>
  <table cellpadding="20" cellspacing="3">
    <?php for ($l = 15; $l >= 1; $l--) : ?>
      <tr>
        <?php for ($a = 1; $a <= $l; $a++) : ?>
          <td class="design"> <?php echo "$a"; ?></td>
        <?php endfor ?>
      </tr>
    <?php endfor ?>
  </table>
</body>

</html>