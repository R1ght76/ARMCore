#!/sbin/sh
MODDIR=${0%/*}
TMP_DIR=/data/local/tmp/armcore_install

# Подготовка временной директории
mkdir -p $TMP_DIR
cp -r $MODDIR/system $TMP_DIR

# Монтирование системы
mount -o rw,remount /system
ui_print "     _    ____  __  __                    "
ui_print "    / \\  |  _ \\|  \\/  | ___ ___  _ __ ___ "
ui_print "   / _ \\ | |_) | |\\/| |/ __/ _ \\| '__/ _ \\"
ui_print "  / ___ \\|  _ <| |  | | (_| (_) | | |  __/"
ui_print " /_/   \\_\\_| \\_\\_|  |_|\\___\\___/|_|  \\___|"
ui_print "               Version 1.0.2.0                   "
ui_print "             Powered by PixelSmith "

ui_print "- Removing old version of ARMCore..."
rm -rf /system/product/app/ARMcore
rm -rf /system/app/ARMcore
rm -rf /system/priv-app/ARMcore

ui_print "- Installing new ARMCore version..."
mkdir -p /system/product/app/ARMcore
cp $TMP_DIR/system/product/app/ARMcore/armcore.apk /system/product/app/ARMcore/
set_perm_recursive /system/product/app/ARMcore 0 0 0755 0644

# Очистка
rm -rf $TMP_DIR
mount -o ro,remount /system

ui_print "- Installation completed successfully!"