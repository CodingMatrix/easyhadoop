<?php
$lang["title"] = "EasyHadoop 管理中心";
$lang["indexPage"] = "首页";
$lang['nodeManager'] = "节点管理";
$lang['nodeMonitor'] = "节点监控";
$lang['welcome'] = "欢迎来到EasyHadoop";
$lang['addNode'] = "添加节点";
$lang['removeNode'] = "删除节点";
$lang['modifyNode'] = "修改节点";
$lang['nodeAdded'] = '节点已添加';
$lang['nodeRemoved'] = '节点已删除';
$lang['nodeModified'] = '节点已修改';
$lang['pingNode'] = 'Ping';
$lang['notConnected'] = '无法连接到节点，请检查Agent是否启动，或已经关闭iptables';
$lang['connected'] = '连接成功'; 

$lang['installManager'] = "节点安装管理";

$lang['startNamenode'] = "启动 Namenode";
$lang['startSecondayNamenode'] = "启动Secondary Namenode";
$lang['startDatanode'] = "启动Datanode";
$lang['startJobtracker'] = "启动Jobtracker";
$lang['startTasktracker'] = "启动Tasktracker";
$lang['stopNamenode'] = '停止Namenode';
$lang['stopSecondaryNamenode'] = '停止Secondary Namenode';
$lang['stopDatanode'] = "停止Datanode";
$lang['stopJobtracker'] = '停止Jobtracker';
$lang['stopTasktracker'] = '停止Tasktracker';
$lang['restartNamenode'] = "重启 Namenode";
$lang['restartSecondayNamenode'] = "重启Secondary Namenode";
$lang['restartDatanode'] = "重启Datanode";
$lang['restartJobtracker'] = "重启Jobtracker";
$lang['restartTasktracker'] = "重启Tasktracker";
$lang['operateNode'] = '节点操作管理';

$lang['formatNamenode'] = '格式化Namenode';
$lang['start'] = '启动';
$lang['stop'] = '停止';
$lang['restart'] = '重启';

$lang['nodeStatus'] = "节点状态";
$lang['confirm'] = '确认';
$lang['cancel'] = '取消';
$lang['submit'] = '提交';
$lang['nodeRole'] = '节点角色';
$lang['lang'] = "cn";
$lang['hostname'] = "主机名称";
$lang['ipAddr'] = "IP地址";
$lang['roleName'] = "节点角色(小写namenode,jobtracker...英文逗号分隔)";
$lang['createTime'] = "创建时间";
$lang['pingNode'] = 'Agent连通测试';
$lang['install'] = '安装Hadoop相关';
$lang['uninstall'] = '卸载Hadoop相关';
$lang['pushFiles'] = '推送配置文件';
$lang['pushGlobalSettings'] = '推送通用配置';
$lang['pushHadoopSettings'] = '推送自身配置';
$lang['pushHadoopFiles'] = '推送Hadoop文件夹';
$lang['choosePushNode'] = '选择推送节点';
$lang['push'] = "推送";
$lang['pushTipsDanger'] = "请确认EasyHadoopManager的./hadoop/文件夹下有相关文件存在。";
$lang['pushTipsWarn'] = '本功能需要您将安装所需要的文件放入页面文件夹下的hadoop/下。<br /> 可以使用hadoop文件夹下的download脚本下载，也可自行下载。<br />请注意，如果该文件夹下没有文件，可能造成不可预知的错误。';
$lang['pushComplete'] = "推送完成，可以开始安装Hadoop";

$lang['installEnvironment'] = '安装环境依赖';
$lang['installJava'] = '安装JDK';
$lang['installHadoop'] = '安装Hadoop';
$lang['installLzo'] = '安装LZO库';
$lang['installLzop'] = '安装Lzop';
$lang['installHadoopgpl'] = '安装Hadoopgpl';
$lang['installButton'] = '安装';

$lang['uninstallJava'] = '卸载JDK';
$lang['uninstallHadoop'] = '卸载Hadoop';
$lang['uninstallHadoopgpl'] = '卸载Hadoopgpl';
$lang['uninstallButton'] = '卸载';

$lang['chooseInstallHost'] = '选择安装节点';
$lang['chooseUninstallHost'] = '选择卸载节点';
$lang['hostSettings'] = '节点配置管理';

$lang['settingsForNode'] = '节点配置项';
$lang['globalSettings'] = '通用配置项';
$lang['etchostsSettings'] = "生成/etc/hosts文件";
$lang['filename'] = '文件名';
$lang['action'] = '操作';
$lang['deleteSettings'] = '删除配置';
$lang['modifySettings'] = '修改配置';
$lang['addSettings'] = '添加配置';
$lang['content'] = '内容';
$lang['settingAdded'] = '配置已添加';
$lang['settingUpdated'] = '配置已修改';
$lang['settingRemoved'] = '配置已删除';
$lang['add'] = '添加';
$lang['edit'] = '编辑';
$lang['remove'] = '移除';
$lang['filenameTips'] = '文件名填写提示:';
$lang['hostSettingFilenameTips'] = "hdfs-site.xml位于/etc/hadoop/hdfs-site.xml<br />mapred-site.xml位于/etc/hadoop/mapred-site.xml";
$lang['globalSettingFilenameTips'] = 'hosts位于/etc/hosts<br />core-site.xml位于/etc/hadoop/core-site.xml';

$lang['namenodeFormatWarn'] = '由于可能造成误操作，暂不开放Namenode Format功能';
$lang['unknownCommand'] = '无法识别的命令：';
$lang['chooseLeftSidebar'] = '选择左面的菜单继续下一步';
