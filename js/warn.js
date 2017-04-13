/**
 * 
 */
function del() {
	if (!confirm("确认要注销？")) {
		window.event.returnValue = false;
	}
}