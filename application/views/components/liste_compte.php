<table>
    <thead>
        <tr role="row">
            <th scope="col">Code</th>
            <th scope="col">Intitulé</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php 
			foreach ($pcg as $p) { ?>
        <tr role="row" id="<?php echo 'row'.$p['idPcg'] ;?>">
            <td scope=" col"><?php echo $p['compte']; ?></td>
            <td scope="col"><?php echo $p['intitule']; ?></td>
            <td scope="col" class="action_col">
                <a href="#?id=<?php echo $p['idPcg']; ?>" class="btn btn-success btn-action">Edit</a>
                <button id="<?php echo $p['idPcg']; ?>" class="btn btn-danger btn-action del-link">Delete</button>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>