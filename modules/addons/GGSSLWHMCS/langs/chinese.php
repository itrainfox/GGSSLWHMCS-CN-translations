<?php

$_LANG['token']        = ', 错误的Token:';
$_LANG['generalError'] = '出了点问题。检查日志并联系管理员';

//ggssl configuration
$_LANG['addonAA']['pagesLabels']['label']['apiConfiguration']                                          = '配置';
$_LANG['addonAA']['apiConfiguration']['cronSynchronization']['header']                                 = '自动同步计划';
$_LANG['addonAA']['apiConfiguration']['cronSynchronization']['pleaseNote']                             = '请注意:';
$_LANG['addonAA']['apiConfiguration']['cronSynchronization']['info']                                   = '为了启用自动同步，请设置以下cron命令行（建议每小时一次）';
$_LANG['addonAA']['apiConfiguration']['cronSynchronization']['commandLine']['cronFrequency']           = '0 */1 * * *';
$_LANG['addonAA']['apiConfiguration']['item']['header']                                                = 'API 配置';
$_LANG['addonAA']['apiConfiguration']['item']['api_login']['label']                                    = '帐号';
$_LANG['addonAA']['apiConfiguration']['item']['api_password']['label']                                 = '密码';
$_LANG['addonAA']['apiConfiguration']['item']['tech_legend']['label']                                  = '技术联系';
$_LANG['addonAA']['apiConfiguration']['item']['csr_generator_legend']['label']                         = 'CSR 创建';
$_LANG['addonAA']['apiConfiguration']['item']['display_csr_generator']['label']                        = '允许使用 CSR 创建';
//
$_LANG['addonAA']['apiConfiguration']['item']['renewal_settings_legend']['label']                      = '续订设置';
$_LANG['addonAA']['apiConfiguration']['item']['auto_renew_invoice_reccuring']['label']                 = '重复订单';
$_LANG['addonAA']['apiConfiguration']['item']['auto_renew_invoice_reccuring']['description']           = '创建自动续订发票';
$_LANG['addonAA']['apiConfiguration']['item']['send_expiration_notification_reccuring']['description'] = '发送过期通知';
$_LANG['addonAA']['apiConfiguration']['item']['auto_renew_invoice_one_time']['label']                  = '一次性订单';
$_LANG['addonAA']['apiConfiguration']['item']['auto_renew_invoice_one_time']['description']            = '创建自动续订发票';
$_LANG['addonAA']['apiConfiguration']['item']['send_expiration_notification_one_time']['description']  = '发送过期通知';
//
$_LANG['addonAA']['apiConfiguration']['item']['tech_firstname']['label']                               = '名';
$_LANG['addonAA']['apiConfiguration']['item']['use_admin_contact']['label']                            = '使用管理联系信息';
$_LANG['addonAA']['apiConfiguration']['item']['tech_lastname']['label']                                = '姓';
$_LANG['addonAA']['apiConfiguration']['item']['tech_organization']['label']                            = '机构名称';
$_LANG['addonAA']['apiConfiguration']['item']['tech_title']['label']                                   = '职位';
$_LANG['addonAA']['apiConfiguration']['item']['tech_addressline1']['label']                            = '地址';
$_LANG['addonAA']['apiConfiguration']['item']['tech_phone']['label']                                   = '手机';
$_LANG['addonAA']['apiConfiguration']['item']['tech_email']['label']                                   = '邮箱';
$_LANG['addonAA']['apiConfiguration']['item']['tech_city']['label']                                    = '城市';
$_LANG['addonAA']['apiConfiguration']['item']['tech_country']['label']                                 = '国家';
$_LANG['addonAA']['apiConfiguration']['item']['tech_fax']['label']                                     = '传真';
$_LANG['addonAA']['apiConfiguration']['item']['tech_postalcode']['label']                              = '邮编';
$_LANG['addonAA']['apiConfiguration']['item']['tech_region']['label']                                  = '国家/地区';

$_LANG['addonAA']['apiConfiguration']['item']['testConnection']['content'] = '测试连接';
$_LANG['addonAA']['apiConfiguration']['item']['saveItem']['label']         = '保存';
$_LANG['addonAA']['pagesLabels']['label']['productsConfiguration']         = '产品配置';
$_LANG['addonAA']['pagesLabels']['label']['productsCreator']               = '新建产品';
$_LANG['addonAA']['pagesLabels']['apiConfiguration']['saveItem']           = '保存设置';

$_LANG['addonAA']['apiConfiguration']['messages']['api_connection_success'] = '连接已建立';


$_LANG['addonAA']['productsConfiguration']['goGetSSLProduct']     = 'GoGetSSL 产品:';
$_LANG['addonAA']['productsConfiguration']['productName']         = '产品名称:';
$_LANG['addonAA']['productsConfiguration']['configurableOptions'] = '可配置选项:';
$_LANG['addonAA']['productsConfiguration']['createConfOptions']   = '生成';
$_LANG['addonAA']['productsConfiguration']['editPrices']          = '修改价格';
$_LANG['addonAA']['productsConfiguration']['autoSetup']           = '自动设置:';
$_LANG['addonAA']['productsConfiguration']['autoSetupOrder']      = '下订单后立即自动设置产品';
$_LANG['addonAA']['productsConfiguration']['autoSetupPayment']    = '收到第一笔付款后立即自动设置产品';
$_LANG['addonAA']['productsConfiguration']['autoSetupOn']         = '手动允许未完成的订单时自动设置产品';
$_LANG['addonAA']['productsConfiguration']['autoSetupOff']        = '不要自动设置此产品';
$_LANG['addonAA']['productsConfiguration']['months']              = '最大月份:';
$_LANG['addonAA']['productsConfiguration']['enableSans']          = '允许 SANs:';
$_LANG['addonAA']['productsConfiguration']['includedSans']        = '包含 SANs:';
$_LANG['addonAA']['productsConfiguration']['status']              = '状态:';

$_LANG['addonAA']['productsConfiguration']['statusEnable']  = '允许';
$_LANG['addonAA']['productsConfiguration']['statusDisable'] = '禁用';


$_LANG['addonAA']['productsConfiguration']['paymentType']          = '支付方式:';
$_LANG['addonAA']['productsConfiguration']['paymentTypeFree']      = '免费';
$_LANG['addonAA']['productsConfiguration']['paymentTypeRecurring'] = '定期';
$_LANG['addonAA']['productsConfiguration']['paymentTypeOneTime']   = '一次性';

$_LANG['addonAA']['productsConfiguration']['pricing']             = '价格:';
$_LANG['addonAA']['productsConfiguration']['pricingMonthly']      = '一次/每月';
$_LANG['addonAA']['productsConfiguration']['pricingQuarterly']    = '每季';
$_LANG['addonAA']['productsConfiguration']['pricingSemiAnnually'] = '半年';
$_LANG['addonAA']['productsConfiguration']['pricingAnnually']     = '每年';
$_LANG['addonAA']['productsConfiguration']['pricingBiennially']   = '每两年';
$_LANG['addonAA']['productsConfiguration']['pricingTriennially']  = '每三年';

$_LANG['addonAA']['productsConfiguration']['pricingSetupFee'] = '设置费';
$_LANG['addonAA']['productsConfiguration']['pricingPrice']    = '价格';
$_LANG['addonAA']['productsConfiguration']['pricingEnable']   = '允许';

$_LANG['addonAA']['productsConfiguration']['save']         = '保存';
$_LANG['addonAA']['productsConfiguration']['messages'][''] = '';


$_LANG['addonAA']['productsCreator']['singleProductCreator'] = '创建单一产品';
$_LANG['addonAA']['productsCreator']['goGetSSLProduct']      = 'GoGetSSL 产品:';
$_LANG['addonAA']['productsCreator']['productName']          = '产品名称:';
$_LANG['addonAA']['productsCreator']['productGroup']         = '产品组:';
$_LANG['addonAA']['productsCreator']['autoSetup']            = '自动设置:';
$_LANG['addonAA']['productsCreator']['autoSetupOrder']       = '下订单后立即自动设置产品';
$_LANG['addonAA']['productsCreator']['autoSetupPayment']     = '收到第一笔付款后立即自动设置产品';
$_LANG['addonAA']['productsCreator']['autoSetupOn']          = '手动允许未完成的订单时自动设置产品';
$_LANG['addonAA']['productsCreator']['autoSetupOff']         = '不要自动设置此产品';
$_LANG['addonAA']['productsCreator']['months']               = ' 月份:';



$_LANG['addonAA']['productsCreator']['enableSans']   = '允许 SANs:';
$_LANG['addonAA']['productsCreator']['includedSans'] = '包含 SANs:';

$_LANG['addonAA']['productsCreator']['pricing']             = '价格:';
$_LANG['addonAA']['productsCreator']['pricingMonthly']      = '一次/每月';
$_LANG['addonAA']['productsCreator']['pricingQuarterly']    = '每季';
$_LANG['addonAA']['productsCreator']['pricingSemiAnnually'] = '半年';
$_LANG['addonAA']['productsCreator']['pricingAnnually']     = '一年';
$_LANG['addonAA']['productsCreator']['pricingBiennially']   = '两年';
$_LANG['addonAA']['productsCreator']['pricingTriennially']  = '三年';

$_LANG['addonAA']['productsCreator']['pricingSetupFee'] = '设置费';
$_LANG['addonAA']['productsCreator']['pricingPrice']    = '产品价格';
$_LANG['addonAA']['productsCreator']['pricingEnable']   = '启用';
$_LANG['addonAA']['productsCreator']['saveSingle']      = '确定创建一个产品';

$_LANG['addonAA']['productsCreator']['multipleProductCreator'] = '创建多个产品';
$_LANG['addonAA']['productsCreator']['saveMultiple']           = '确定创建多个产品';

$_LANG['addonAA']['productsCreator']['messages']['mass_product_created']    = '产品已添加为隐藏，在验证产品配置和设定价格之前，请转到“产品配置”以取消隐藏。';
$_LANG['addonAA']['productsCreator']['messages']['single_product_created']  = '产品已被隐藏添加，在验证产品配置之前，请转到“产品配置”以取消隐藏。';
$_LANG['addonAA']['productsCreator']['messages']['no_product_group_found']  = '未找到任何产品组';
$_LANG['addonAA']['productsCreator']['messages']['api_product_not_chosen']  = '未选择GoGetSSL的产品';
$_LANG['addonAA']['productsCreator']['messages']['api_configuration_empty'] = 'API 配置为空';

$_LANG['addonAA']['productsConfiguration']['messages']['product_saved']          = '保存产品';
$_LANG['addonAA']['productsConfiguration']['messages']['configurable_generated'] = '已成功生成产品的可配置选项。';

$_LANG['addonAA']['productsConfiguration']['messages']['api_configuration_empty'] = 'API 配置为空';

$_LANG['anErrorOccurred'] = '发生错误';
