<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Foto</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Matakuliah</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data_dosen as $row) {

            echo '<tr>';
            echo '<td>' . $row->id . '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>