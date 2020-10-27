

//Инцилизация при отркытии страницы
$(document).ready(function () {
  setTimeout(function () {
    $('.c-i-two').show();
    $(document).ready(function () {
      $('.chatbox-right_section').scrollTop(100000);
    });
  }, 6000);
  //Тот самый старт который запускает движуху
  let start = document.querySelector('.starting'),
      butonName = start.getAttribute('name');
  startNode(butonName);
});




//Функция клика которая отслеживает атрибут
$('.c-i-two').on('click', '.cb-btn', function () {
  // Получение атрибута
  let butonName = this.getAttribute('name');
  // Удаление кнопки с поля зрения после 
  $('.cb-btn').css({ 'display': 'none' });
  startNode(butonName);
})


//Тоже что и функция выше только кнопка отправляет значения инпута, сама кнопка без атрибута
$('.shpix').on('click', '.btn-inp', function () {
  setTimeout(() => {
    //Вывод данных инпута на экран
    var val = document.getElementById('text').value;
    $('.chatbox-right_section').scrollTop(100000);
  }, 0);
  startNode();
  $('#text').remove();
  $('.btn-inp').remove();
})
function startNode(butonName) {
  let butonNames = $('#text').val();

  $.ajax({
    type: 'post',
    url: 'http://penis-store.com/function.php',
    data: {
      // Это для инпутов и всего что захочет ввести пользователь
      text: butonNames,
      // Это для всего что просходит внутри чата
      name: butonName,
    },
    dataType: "JSON",
    response: 'text',
    success: function (data) {
      // Тут наверное все понятно
      var res = eval(data);
      console.log(res)
      $('.stat').append(res.msg);
      $('.chatbox-right_section').scrollTop(100000);
      $.each(res.otvet, (key, value) => {
        setTimeout(() => {
          $('.stat').append(value);
          $('.chatbox-right_section').scrollTop(100000);
        }, (key + 1) * 1000);
      });
      $('#more').text(res.more)
      setTimeout(() => {
        $('.shpix').append(res.input)
        // Тут проверяем получит ли ответ с инпута, если да то выводим
        if (res.input) {
          $('.chatbox-right_footer').css({ 'display': 'block' })
        }
      }, 2000);
    }
  });
}












