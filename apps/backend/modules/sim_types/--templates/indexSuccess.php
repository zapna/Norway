<h1>Sim types List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sim_types_list as $sim_types): ?>
    <tr>
      <td><a href="<?php echo url_for('sim_types/edit?id='.$sim_types->getId()) ?>"><?php echo $sim_types->getId() ?></a></td>
      <td><?php echo $sim_types->getTitle() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('sim_types/new') ?>">New</a>
