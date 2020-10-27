<?php




if (isset($_POST['name'])) {
    $i = $_POST['name'];
    if($i == 'starting'){
        $msg['msg'] = ['<div class="slice"><p class="mmm">Здравствуйте, пользователь</p></div>'];
        $msg['otvet'][] = ['<div class="slice"><span class="time">4:20</span> <p class="mmm">Новое сообщение</p></div>'];
        $msg['otvet'][] = [
        '<button class="cb-btn cb-btn-close" name="1">Яблоко</button>', 
        '<button class="cb-btn cb-btn-close" name="2">Груша</button>',
        '<button class="cb-btn cb-btn-close" name="3">Апельсин</button>'];
    
    
        echo json_encode($msg);
    }

    if ($i == '1') {
        $msg['msg'] = ['<div class="slice"><span class="time">4:20</span> <p class="ooo">Я очень люблю яблоки</p></div>'];
        $msg['otvet'][] = ['<div class="slice"><span class="time">4:20</span> <p class="mmm">Это очень круто</p></div>'];
        $msg['otvet'][] = ['<div class="slice"><span class="time">4:20</span> <p class="mmm">Яблоки очень полезные</p></div>'];
        $msg['otvet'][] = ['<div class="slice"><span class="time">4:20</span> <p class="mmm">Как часто вы едите яблоки</p></div>'];
        $msg['otvet'][] = ['<button class="cb-btn kn1" name="1-1">Часто</button> <button class="cb-btn kn2" name="1-2">Редко</button>'];
        echo json_encode($msg);
    } else if ($i == '1-1') {
        $msg['msg'] = ['<div class="slice"><span class="time">4:20</span> <p class="ooo">Ответ</p></div>'];
        $msg['otvet'][] = ['<div class="slice"><span class="time">4:20</span> <p class="mmm">Забыл спросить ваше имя, как ваз зовут?</p></div>'];
        $msg['input'][] = [
            '<textarea id="text"  type="text" name="text" placeholder="Введите сообщение"></textarea>',
            '<button class="btn-inp" name="33">Send</button>'
    ];
        echo json_encode($msg);
    } else if ($i == '1-2') {
        $msg['msg'] = ['<div class="slice"><span class="time">4:20</span> <p class="ooo">Ответ</p></div>'];
        $msg['otvet'][] = ['<div class="slice"><span class="time">4:20</span> <p class="mmm">Забыл спросить ваше имя, как ваз зовут?</p></div>'];
        $msg['input'][] = [
            '<textarea id="text"  type="text" name="text" placeholder="Введите сообщение"></textarea>',
            '<button class="btn-inp" name="33">Send</button>'
    ];
        echo json_encode($msg);
    }

    if ($i == '2') {
        $msg['msg'] = ['<div class="slice"><span class="time">4:20</span> <p class="ooo">Я очень люблю яблоки</p></div>'];
        $msg['otvet'][] = ['<div class="slice"><span class="time">4:20</span> <p class="mmm">Это очень круто</p></div>'];
        $msg['otvet'][] = ['<div class="slice"><span class="time">4:20</span> <p class="mmm">Яблоки очень полезные</p></div>'];
        $msg['otvet'][] = ['<div class="slice"><span class="time">4:20</span> <p class="mmm">Как часто вы едите яблоки</p></div>'];
        $msg['otvet'][] = ['<button class="cb-btn kn1" name="2-1">Часто</button> <button class="cb-btn kn2" name="2-2">Редко</button>'];
        echo json_encode($msg);
    } else if ($i == '2-1') {
        $msg['msg'] = ['<div class="slice"><span class="time">4:20</span> <p class="ooo">Ответ</p></div>'];
        $msg['otvet'][] = ['<div class="slice"><span class="time">4:20</span> <p class="mmm">Забыл спросить ваше имя, как ваз зовут?</p></div>'];
        $msg['input'][] = [
            '<textarea id="text"  type="text" name="text" placeholder="Введите сообщение"></textarea>',
            '<button class="btn-inp" name="33">Send</button>'
    ];
        echo json_encode($msg);
    } else if ($i == '2-2') {
        $msg['msg'] = ['<div class="slice"><span class="time">4:20</span> <p class="ooo">Ответ</p></div>'];
        $msg['otvet'][] = ['<div class="slice"><span class="time">4:20</span> <p class="mmm">Забыл спросить ваше имя, как ваз зовут?</p></div>'];
        $msg['input'][] = [
            '<textarea id="text"  type="text" name="text" placeholder="Введите сообщение"></textarea>',
            '<button class="btn-inp" name="33">Send</button>'
    ];
        echo json_encode($msg);
    }


    if ($i == '3') {
        $msg['msg'] = ['<div class="slice"><span class="time">4:20</span> <p class="ooo">Я очень люблю яблоки</p></div>'];
        $msg['otvet'][] = ['<div class="slice"><span class="time">4:20</span> <p class="mmm">Это очень круто</p></div>'];
        $msg['otvet'][] = ['<div class="slice"><span class="time">4:20</span> <p class="mmm">Яблоки очень полезные</p></div>'];
        $msg['otvet'][] = ['<div class="slice"><span class="time">4:20</span> <p class="mmm">Как часто вы едите яблоки</p></div>'];
        $msg['otvet'][] = ['<button class="cb-btn kn1" name="3-1">Часто</button> <button class="cb-btn kn2" name="3-2">Редко</button>'];
        echo json_encode($msg);
    } else if ($i == '3-1') {
        $msg['msg'] = ['<div class="slice"><span class="time">4:20</span> <p class="ooo">Ответ</p></div>'];
        $msg['otvet'][] = ['<div class="slice"><span class="time">4:20</span> <p class="mmm">Забыл спросить ваше имя, как ваз зовут?</p></div>'];
        $msg['input'][] = [
            '<textarea id="text"  type="text" name="text" placeholder="Введите сообщение"></textarea>',
            '<button class="btn-inp" name="33">Send</button>'
    ];
        echo json_encode($msg);
    } else if ($i == '3-2') {
        $msg['msg'] = ['<div class="slice"><span class="time">4:20</span> <p class="ooo">Ответ</p></div>'];
        $msg['otvet'][] = ['<div class="slice"><span class="time">4:20</span> <p class="mmm">Забыл спросить ваше имя, как ваз зовут?</p></div>'];
        $msg['input'][] = [
            '<textarea id="text"  type="text" name="text" placeholder="Введите сообщение"></textarea>',
            '<button class="btn-inp" name="33">Send</button>'
    ];
        echo json_encode($msg);
    }
}
if (isset($_POST['text'])) {
    $r = $_POST['text'];

    if ($r) {
        $msk['msg'] = ["<div class='slice'><span class='time'>4:20</span> <p class='ooo'>$r</p></div>"];
        $msk['otvet'] = ["<div class='slice'><span class='time'>4:20</span> <p class='mmm'>Приятно познакомиться $r</p></div>"];
        $msk['more'] = 'Какой то текст';
        echo json_encode($msk);
    }
}
