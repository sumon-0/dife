

    <script>
        function printDiv() {
            var divContents = document.getElementById("GFG").innerHTML;
            var a = window.open('', '', 'height=900, width=900');
            a.document.write('<html>');
            a.document.write('<body ><br>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>

    <style>
        table {
            border-collapse: collapse;
            table-layout: fixed;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
        }
    </style>
    <div style="margin: 0px auto;text-align: center;padding: 10px">
        <input type="button" style="background: #228B22;color: #fff;font-weight: bolder;width: 100px;padding: 10px;margin: 0px auto;text-align: center" value="Print"
               onclick="printDiv()">
    </div>

    <div id="GFG">
<table width="100%">
    <tr>
        <td>Company: {{$all_answers[0]->company_name}}</td>
        <td>Owner: {{$all_answers[0]->owner_name}}</td>
    </tr>

    <tr>
        <td colspan="2">Address: {{$all_answers[0]->address}}</td>
    </tr>
</table>
        <br/>
        <hr/>
        <table>
            <tr>
                <td style="width:10% !important;">S/N</td>
                <td>Question</td>
                <td>Your Answer</td>
            </tr>
            @foreach($all_answers as $key=>$answer)
            <tr>

                <td>{{$key+1}}</td>
                <td>{!! $answer->question !!}</td>
                @if($answer->selected_answer=="yes")
                <td>
                    {!! $answer->answer_one !!}
                </td>
                    @else
                        <td>
                            {!! $answer->answer_two !!}
                        </td>
                    @endif

            </tr>
            @endforeach
        </table>
    </div>






    <div style="margin: 0px auto;text-align: center;padding: 10px">
        <input type="button" style="background: #228B22;color: #fff;font-weight: bolder;width: 100px;padding: 10px;margin: 0px auto;text-align: center" value="Print"
               onclick="printDiv()">
    </div>
