if(typeof (HTMLElement)!="undefined"&&!window.opera){HTMLElement.prototype.__defineGetter__("parentElement",function(){if(this.parentNode==this.ownerDocument){return null}return this.parentNode})}function CopyCode(A){var B=A.parentElement.parentElement.parentElement.getElementsByTagName("pre");if(B){if(navigator.appName.indexOf("Microsoft")!=-1){copyToClipboard(B[0].innerText)}else{copyToClipboard(B[0].textContent)}}}function Html2Txt(A){str=A.replace(/\r\n/g," ");str=str.replace(/\r/g," ");str=str.replace(/\n/g," ");str=str.replace(/\t/g,"");str=str.replace(/<br>/gi,"\r\n");str=str.replace(/<br \/>/gi,"\r\n");str=str.replace(/<[^>]+?>/g,"");str=str.replace(/&nbsp;/g," ");str=str.replace(/&gt;/g,">");str=str.replace(/&lt;/g,"<");str=str.replace(/&amp;/g,"&");return str}function copyToClipboard(B){if(window.clipboardData){window.clipboardData.clearData();window.clipboardData.setData("Text",B)}else{if(navigator.userAgent.indexOf("Opera")!=-1){window.location=B}else{if(window.netscape){try{netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect")}catch(F){alert("���� Firefox ��ȫ�������������м�������������ڵ�ַ�������롰about:config������signed.applets.codebase_principal_support������Ϊ��true��֮�����ԣ�");return false}var D=Components.classes["@mozilla.org/widget/clipboard;1"].createInstance(Components.interfaces.nsIClipboard);if(!D){return }var C=Components.classes["@mozilla.org/widget/transferable;1"].createInstance(Components.interfaces.nsITransferable);if(!C){return }C.addDataFlavor("text/unicode");var G=new Object();var A=new Object();var G=Components.classes["@mozilla.org/supports-string;1"].createInstance(Components.interfaces.nsISupportsString);var H=B;G.data=H;C.setTransferData("text/unicode",G,H.length*2);var E=Components.interfaces.nsIClipboard;if(!D){return false}D.setData(C,null,E.kGlobalClipboard)}}}};