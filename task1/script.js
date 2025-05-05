// Как всегда, проберим готовность документа
$(function() {
    // Оттаблицаем события "Нажатие на клавишу"
    $(this).keydown(function(event) {
    // Создаем переменную, в которую помещаем div с подходящим data-key
    var key = $(this).find('.key[data-key='+event.which+']');
    // Находим на странице тез audio с нужным data-key и помещаем также в переменную для удобства
    var audio = $(this).find('audio[data-key='+event.which+']')[0];
    // Присадиваем активный класс к клавише, чтобы подсветить ее
    key.toggleClass('playing');
    // Проверяем существует ли audio тез с таким data-key
    if (!audio) return;
    // Воспроизводим звук
    audio.play();
    // Сбрасываем таймер звуковой дорожки снова на 0
    audio.currentTime = 0;
});

// Отслеживаем событие, когда пользователь отпускает кнопку
$(this).keyup(function(event) {
    // Снова создаем переменную с нужным data-key
    var key = $(this).find('.key[data-key='+event.which+']');
    // Убираем класс, который подсвечивает кнопку
    key.toggleClass('playing');
    });
});