<!DOCTYPE html>
<html>
<head>
<style>
    /* CSS untuk membuat header tabel yang dibekukan secara vertikal */
    .table-container {
        overflow-x: scroll;
        max-height: 400px; /* Sesuaikan tinggi maksimal sesuai kebutuhan */
    }

    /* Gaya tabel utama */
    table {
        width: 100%;
        border-collapse: collapse;
    }

    /* Gaya sel header */
    th {
        background-color: #f2f2f2;
    }

    /* Gaya sel konten */
    td, th {
        padding: 8px;
        border: 1px solid #ddd;
        text-align: left;
    }
</style>
</head>
<body>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th class="freeze horizontal">Header 1</th>
                <th class="freeze horizontal">Header 2</th>
                <th>Header 3</th>
                <th>Header 4</th>
                <th>Header 5</th>
                <th>Header 6</th>
                <th>Header 7</th>
                <th>Header 8</th>
                <th>Header 9</th>
                <th>Header 10</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="freeze horizontal">Data 1</td>
                <td class="freeze horizontal">Data 2</td>
                <td>Data 3</td>
                <td>Data 4</td>
                <td>Data 5</td>
                <td>Data 6</td>
                <td>Data 7</td>
                <td>Data 8</td>
                <td>Data 9</td>
                <td>Data 10</td>
            </tr>
            <tr>
                <td class="freeze horizontal">Data 1</td>
                <td class="freeze horizontal">Data 2</td>
                <td>Data 3</td>
                <td>Data 4</td>
                <td>Data 5</td>
                <td>Data 6</td>
                <td>Data 7</td>
                <td>Data 8</td>
                <td>Data 9</td>
                <td>Data 10</td>
            </tr>
            <!-- Tambahkan baris data lainnya -->
        </tbody>
    </table>
</div>

<script>
    // Ambil elemen Header 1 dan Data 1
    var header1 = document.querySelector('.freeze.horizontal');
    var data1 = document.querySelectorAll('.freeze.horizontal');

    // Tangkap peristiwa gulir
    document.querySelector('.table-container').addEventListener('scroll', function () {
        // Tetapkan posisi horizontal Header 1 dan Data 1
        header1.style.transform = 'translateX(' + this.scrollLeft + 'px)';
        for (var i = 0; i < data1.length; i++) {
            data1[i].style.transform = 'translateX(' + this.scrollLeft + 'px)';
        }
    });
</script>

</body>
</html>
