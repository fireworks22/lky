window.onload = function() {
    window.n = 0;
    for (var i = 0; i < $.cls("div").length; ++i) {
        $.cls("div")[i].id = (i % 15 + 1) + "_" + (Math.floor(i / 15) + 1);//���id �൱����������꣬ǰ���Ϊx �����Ϊy

        $.cls("div")[i].addEventListener("mouseover", function () {//���������ʾ���
            if (this.style.background == "")
                this.style.background = "url(./hand.png)";
        });
        $.cls("div")[i].addEventListener("mouseout", function () {//����Ƴ�
            if (this.style.background == "url(\"./hand.png\")")
                this.style.background = "";
        });

        $.cls("div")[i].addEventListener("click", function () {//�������ʾ����
            if (this.style.background == "url(\"./hand.png\")" && !window.n) {
                this.style.background = "url(./bai.png)";
                var arr = this.id.split('_');
                player.push([Number(arr[0]), Number(arr[1])]);
                var f = five(Number(arr[0]), Number(arr[1]), "bai", "hei");
                if (f[0][0] >= 5 || f[1][0] >= 5 || f[2][0] >= 5 || f[3][0] >= 5) {
                    alert("��ϲ�㣬��Ӯ�ˣ�");
                    window.n++;
                    return;
                }

                computer();
            }
        });
    }
}