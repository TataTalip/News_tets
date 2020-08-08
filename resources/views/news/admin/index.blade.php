@extends('layouts.app_admin')

@section('content')
    <section class="content-header">
    </section>
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-body">
                <div class="table-responsive">
                    <br>
                    <input class="form-control" type="text" placeholder="Введите текст для поиска" id="search-text" onkeyup="tableSearch()">
                    <table id="info-table" class="table table-hover">
                        <thead>
                        <tr class='table-data'>
                            <th data-field="id" data-sortable="true">Номер</th>
                            <th data-field="name" data-sortable="true">Наимнование</th>
                            <th data-field="status" data-sortable="true" style="">Статус</th>
                            <th data-field="in_work" data-sortable="true" style="">В работе</th>
                            <th data-field="amount" data-sortable="true">Сумма</th>
                            <th data-field="created_at" data-sortable="true">Дата создания</th>
                            <th data-field="user_name" data-sortable="true">Исполнитель</th>
                        </tr>

                        </thead>


                    </table>

                </div>


            </div>
        </div>
    </div>
    <script>
        function tableSearch() {
            var phrase = document.getElementById('search-text');
            var table = document.getElementById('info-table');
            var regPhrase = new RegExp(phrase.value, 'i');
            var flag = false;
            for (var i = 1; i < table.rows.length; i++) {
                flag = false;
                for (var j = table.rows[i].cells.length - 1; j >= 0; j--) {
                    flag = regPhrase.test(table.rows[i].cells[j].innerHTML);
                    if (flag) break;
                }
                if (flag) {
                    table.rows[i].style.display = "";
                } else {
                    table.rows[i].style.display = "none";
                }

            }
        }
    </script>
@endsection
