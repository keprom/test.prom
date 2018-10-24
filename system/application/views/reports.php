<?php
$reports = array(
    "billing/vih_7_re_form" => "Оборотная ведомость 7-РЭ",
    "billing/vih_2_re_form" => "Оборотная ведомость 2-РЭ",
    "billing/pre_dolgi" => "Должники",
    "billing/pre_list_of_firms" => "Список действующих организаций и предприятий",
    "billing/reported_firms_form" => "Отчитавшиеся/неотчитавшиеся предприятия",
    "billing/pre_oplata_svod" => "Свод по оплате",
    "billing/pre_oplata_po_schetam" => "Оплата за текущий период",
    "billing/pre_svod_po_tp" => "Свод по тп",
    "billing/pre_svod_saldo_po_ture" => "Свод сальдо по участкам",
    "billing/pre_energo_24" => "24 энергетика",
    "billing/pre_poleznyy_otpusk" => "Полезный отпуск",
    "billing/pre_naryad_zadanie_po_ture" => "Наряд задание по ТУРЭ",
    "billing/pre_oborotka_with_predoplata" => "Оборотка с учетом предоплаты",
    "billing/pre_svod_oplat_po_firmam" => "Свод оплат по фирмам",
    "billing/statisticheskiy_otchet" => "Статистический отчет",
    "billing/pre_oborotno_svodnaya_vedomost" => "Оборотно сводная ведомость",
    "billing/pre_diff_tariff_controll" => "Ведомость по дифф тарифу",
    "billing/pre_diff_tariff_controll_3" => "Ведомость по дифф тарифу ( 3 тарифа ) ",
    "billing/pre_diff_tariff_spisok" => "Ведомость по дифф тарифу (развернутая) ",
    "billing/pre_diff_tariff_spisok_3" => "Ведомость по дифф тарифу ( 3 тарифа ) (развернутая) ",
    "billing/pre_analiz_diff_tarif" => "Анализ по тарифам (3 тарифа) ",
    "billing/pre_analiz_diff_tarif_spisok" => "Анализ по тарифам (3 тарифа) развернутая ",
    "billing/pre_platejnye_dokumenty" => "Платежные документы",
    "billing/pre_report_to_nalogovaya" => "Отчет в налоговую",
    "billing/pre_multi_tariff_count" => "Количество многоставочных и одноставочных счетчиков.",
    "billing/pre_nadbavka_info" => "Информация по надбавкам.",
    "billing/pre_subabonent" => "Список субабонентов",
    "billing/pre_ne_potrebil" => "Список фирм с нулевым начислением",
    "billing/pre_svod" => "Свод потребления кВт за период",
    "billing/statisticheskiy_otchet_new" => "Статистический отчет (развернутый)",
    "billing/pre_akt_snyatiya_pokazaniy" => "Акт снятия показаний",
    "billing/pre_holostoy_hod" => "Холостой ход",
    "billing/dispetcherskaya" => "Диспетчерская",
    "billing/doljniki_za_period_form" => "Должники за период",
    "billing/billing_point_info_all" => "Список счетчиков",
    "billing/pre_analiz_mnogourovneviy_spisok" => "Анализ по многоуровневому тарифу (развернутый)",
    "billing/pre_analiz_mnogourovneviy" => "Анализ по многоуровневому тарифу",
    "billing/pre_ip_obshiy" => "Частники, расчитывающиеся по общему тарифу",
    "billing/svod_kvt_po_godam" => "Свод киловат по годам",
    "billing/pre_svod_new" => "Свод киловат за периоды по группам",
    "billing/pre_analiz_obwii" => "Анализ по общему тарифу",
    "billing/report_budjet" => "Бюджет",
    "billing/report_prom" => "Промгруппа",
    "billing/report_neprom" => "НеПромгруппа",
    "billing/firm_poter" => "Фирмы с потерями",
    "billing/pre_manual_sf" => "Счет-фактура (*)",
    "billing/pre_fine_2_re" => "2-РЭ (пеня)",
    "billing/pre_fine_7_re" => "7-РЭ (пеня)",
    "billing/pre_diff_tariff_year" => "Годовая ведомость по дифф.тарифу (3 тарифа) (*)",
    "billing/pre_analiz_m_year" => "Годовой анализ по многоуровневому тарифу (*)",
    "billing/pre_kvt_year" => "Свод кВт по годам в разрезе фирм (*)",
    "billing/pre_tenge_year" => "Свод начислений по годам в разрезе фирм (*)",
    "billing/pre_billing_info_dop" => "Информация по точкам учета по ТУРЭ",
    "billing/gos_poverka" => "Гос.поверка",
);

asort($reports);

foreach ($reports as $key => $value):?>
    <a href="<?php echo site_url($key); ?>"><?php echo $value; ?></a><br>
<?php endforeach; ?>
