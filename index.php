<?php
/**
 * Концертный зал.
 * Имеется концертный зал с фиксированным набором посадочных мест, разбитых на категории (партер, бельэтаж, балкон и др.)
 * Необходимо дать возможность клиентам бронировать места, заказ мест включает в себя имя клиента, категорию, кол-во мест.
 * Имеется лимит числа билетов, которые может купить один человек. Билеты имеют разную цену и после заказа клиенту сообщают его стоимость.
 * Возможно, стоит выводить схему зала с цветовой разметкой проданных мест и обозначением разных категорий.
 * Учесть, что количество категорий билетов должно быть в пределах 3..5, общее число мест в каждой категории в пределах 10..50.
 * Для каждой категории задан лимит числа билетов на один заказ. Все данные хранятся в таблице БД.
 * При этом сайт имеет два раздела – касса и список заказов. В кассе отображается список категорий с указанием свободных мест и общего их числа для каждой категории.
 * В кассе также есть форма для заказа билетов, при выборе категории из списка должен отобразится лимит для данной категории.
 * В разделе заказов представлен список заказов, с указанием номера, имени клиента, категории и числа мест и кнопкой удаления для каждого заказа.
 *
 */
ini_set('display_errors', 1);
require_once 'application/bootstrap.php';