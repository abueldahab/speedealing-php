<?php
/* Copyright (C) 2012	Regis Houssin	<regis.houssin@capnetworks.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

$boxes = array(
		'CHARSET' => 'UTF-8',
		'BoxLastRssInfos' => 'Информация RSS',
		'BoxLastProducts' => 'Последние %s товары / услуги',
		'BoxProductsAlertStock' => 'Products in stock alert',
		'BoxLastProductsInContract' => 'Последние %s проданные товары / услуги',
		'BoxLastSupplierBills' => 'Последние счета-фактуры поставщиков',
		'BoxLastCustomerBills' => 'Последние счета-фактуры покупателям',
		'BoxOldestUnpaidCustomerBills' => 'Самые старые неоплаченные счета-фактуры покупателям',
		'BoxOldestUnpaidSupplierBills' => 'Самые старые неоплаченные счета-фактуры поставщиков',
		'BoxLastProposals' => 'Последние коммерческие предложения',
		'BoxLastProspects' => 'Последние измененные потенциальные клиенты',
		'BoxLastCustomers' => 'Последние измененные покупатели',
		'BoxLastSuppliers' => 'Последние измененные поставщики',
		'BoxLastCustomerOrders' => 'Последние заказы покупателей',
		'BoxLastBooks' => 'Последние сделки',
		'BoxLastActions' => 'Последние действия',
		'BoxLastContracts' => 'Последние договоры',
		'BoxLastContacts' => 'Последние контакты / адреса',
		'BoxLastMembers' => 'Последнее участники',
		'BoxCurrentAccounts' => 'Текущие остатки на счетах',
		'BoxSalesTurnover' => 'Оборот по продажам',
		'BoxTotalUnpaidCustomerBills' => 'Общая сумма неоплаченных счетов-фактур покупателям',
		'BoxTotalUnpaidSuppliersBills' => 'Общая сумма неоплаченных счетов-фактур поставщиков',
		'BoxTitleLastBooks' => 'Последние %s зарегистрированных сделок',
		'BoxTitleNbOfCustomers' => 'Кол-во покупателей',
		'BoxTitleLastRssInfos' => 'Последние новости %s из %s',
		'BoxTitleLastProducts' => 'Последние %s измененные товары / услуги',
		'BoxTitleProductsAlertStock' => 'Products in stock alert',
		'BoxTitleLastCustomerOrders' => 'Последние %s измененные заказы покупателей',
		'BoxTitleLastSuppliers' => 'Последние %s зарегистрированных поставщиков',
		'BoxTitleLastCustomers' => 'Последние %s зарегистрированных покупателей',
		'BoxTitleLastModifiedSuppliers' => 'Последнее %s измененных поставщиков',
		'BoxTitleLastModifiedCustomers' => 'Последнее %s измененных покупателей',
		'BoxTitleLastCustomersOrProspects' => 'Последние %s зарегистрированных покупателей и потенциальных клиентов',
		'BoxTitleLastPropals' => 'Последние %s зарегистрированных предложений',
		'BoxTitleLastCustomerBills' => 'Последние %s счетов-фактур покупателям',
		'BoxTitleLastSupplierBills' => 'Последние %s счетов-фактур поставщиков',
		'BoxTitleLastProspects' => 'Последние %s зарегистрированных потенциальных клиентов',
		'BoxTitleLastModifiedProspects' => 'Последнее %s измененных потенциальных клиентов',
		'BoxTitleLastProductsInContract' => 'Последние %s товаров / услуг в договорах',
		'BoxTitleLastModifiedMembers' => 'Последние %s измененных участников',
		'BoxTitleOldestUnpaidCustomerBills' => '%s самых старых неоплаченных счетов-фактур покупателям',
		'BoxTitleOldestUnpaidSupplierBills' => '%s самых старых неоплаченных счетов-фактур поставщиков',
		'BoxTitleCurrentAccounts' => 'Остатки на текущих счетах',
		'BoxTitleSalesTurnover' => 'Оборот по продажам',
		'BoxTitleTotalUnpaidCustomerBills' => 'Неоплаченные счета-фактуры покупателям',
		'BoxTitleTotalUnpaidSuppliersBills' => 'Неоплаченные счета-фактуры поставщиков',
		'BoxTitleLastModifiedContacts' => 'Последние %s измененных контактов / адресов',
		'BoxMyLastBookmarks' => 'Мои последние %s закладок',
		'BoxOldestExpiredServices' => 'Старейшие активных истек услуги',
		'BoxLastExpiredServices' => 'Последнее %s старых контактов с активной истекшим услуги',
		'BoxTitleLastActionsToDo' => 'Последние %s действий для выполнения',
		'BoxTitleLastContracts' => 'Последние %s договоров',
		'BoxTitleLastModifiedDonations' => 'Последние %s измененных пожертвований',
		'BoxTitleLastModifiedExpenses' => 'Последние %s измененных расходов',
		'BoxGlobalActivity' => 'Global activity (invoices, proposals, orders)',
		'FailedToRefreshDataInfoNotUpToDate' => 'Не удалось обновить RSS-поток. Дата последнего успешного обновления: %s',
		'LastRefreshDate' => 'Дата последнего обновления',
		'NoRecordedBookmarks' => 'Закладки не созданы.',
		'ClickToAdd' => 'Нажмите здесь, чтобы добавить.',
		'NoRecordedCustomers' => 'Нет зарегистрированных клиентов',
		'NoRecordedContacts' => 'Нет введенных контактов',
		'NoActionsToDo' => 'Нет действий для выполнения',
		'NoRecordedOrders' => 'Нет зарегистрированных заказы покупателей',
		'NoRecordedProposals' => 'Нет зарегистрированных предложений',
		'NoRecordedInvoices' => 'Нет зарегистрированных счетов-фактур покупателям',
		'NoUnpaidCustomerBills' => 'Нет неоплаченных счетов-фактур покупателям',
		'NoRecordedSupplierInvoices' => 'Нет зарегистрированных счетов-фактур поставщиков',
		'NoUnpaidSupplierBills' => 'Нет неоплаченных счетов-фактур поставщиков',
		'NoModifiedSupplierBills' => 'Нет введенных счетов-фактур поставщиков',
		'NoRecordedProducts' => 'Нет зарегистрированных товаров / услуг',
		'NoRecordedProspects' => 'Нет зарегистрированных потенциальных клиентов',
		'NoContractedProducts' => 'Нет законтрактованных товаров / услуг',
		'NoRecordedContracts' => 'Нет введенных договоров',
		// Latest supplier orders
		'BoxLatestSupplierOrders' => 'Latest supplier orders',
		'BoxTitleLatestSupplierOrders' => '%s latest supplier orders',
		'NoSupplierOrder' => 'No recorded supplier order'
);
?>