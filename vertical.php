<!DOCTYPE html>
<html>
<head>
<style>
    /* CSS untuk membuat header tabel yang dibekukan */
    .table-container {
        overflow: auto;
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

    /* Gaya sel header yang dibekukan */
    .header-row th {
        position: sticky;
        top: 0;
        z-index: 2;
        background-color: #f2f2f2;
    }

    /* Gaya kolom pertama yang dibekukan */
    .first-column td {
        position: sticky;
        left: 0;
        z-index: 1;
        background-color: #f2f2f2;
    }
</style>
</head>
<body>

<div class="table-container">
    <table>
        <thead>
            <tr class="header-row">
                <th>Header 1</th>
                <th>Header 2</th>
                <th>Header 3</th>
                <!-- Tambahkan header sesuai kebutuhan -->
            </tr>
        </thead>
        <tbody>
            <tr class="first-column">
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
                <!-- Tambahkan data sesuai kebutuhan -->
            </tr>
            <tr class="first-column">
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
                <!-- Tambahkan data sesuai kebutuhan -->
            </tr>
            <tr class="first-column">
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
                <!-- Tambahkan data sesuai kebutuhan -->
            </tr>
            <tr class="first-column">
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
                <!-- Tambahkan data sesuai kebutuhan -->
            </tr>
            <tr class="first-column">
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
                <!-- Tambahkan data sesuai kebutuhan -->
            </tr>
            <tr class="first-column">
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
                <!-- Tambahkan data sesuai kebutuhan -->
            </tr>
            <tr class="first-column">
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
                <!-- Tambahkan data sesuai kebutuhan -->
            </tr>
            <tr class="first-column">
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
                <!-- Tambahkan data sesuai kebutuhan -->
            </tr>
            <tr class="first-column">
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
                <!-- Tambahkan data sesuai kebutuhan -->
            </tr>
            <tr class="first-column">
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
                <!-- Tambahkan data sesuai kebutuhan -->
            </tr>
            <tr class="first-column">
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
                <!-- Tambahkan data sesuai kebutuhan -->
            </tr>
            <tr class="first-column">
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
                <!-- Tambahkan data sesuai kebutuhan -->
            </tr>
            <tr class="first-column">
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
                <!-- Tambahkan data sesuai kebutuhan -->
            </tr>
            <tr class="first-column">
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
                <!-- Tambahkan data sesuai kebutuhan -->
            </tr>
            <tr class="first-column">
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
                <!-- Tambahkan data sesuai kebutuhan -->
            </tr>
            <!-- Tambahkan baris data lainnya -->
        </tbody>
    </table>
</div>

</body>
</html>
