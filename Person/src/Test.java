
public class Test {

	public static void main(String []args){

		Person taro = new Person();
		taro.name = "山田太郎";
		taro.age = 20;
		taro.phoneNumber = "080-1111-2222";
		taro.address = "東京";

		Person zirou = new Person();
		zirou.name = "木村次郎";
		zirou.age = 18;
		zirou.phoneNumber = "080-3333-4444";
		zirou.address = "神奈川";

		Person hanako = new Person();
		hanako.name = "鈴木花子";
		hanako.age = 16;
		hanako.phoneNumber = "090-0000-1111";
		hanako.address = "千葉";


		Person yuki = new Person();
		yuki.name = "堀尾祐貴";
		yuki.age = 27;
		yuki.phoneNumber = "080-7777-7777";
		yuki.address = "大阪";

		Robot aibo = new Robot();
		aibo.name = "aibo";

		Robot asimo = new Robot();
		asimo.name = "asimo";

		Robot pepper = new Robot();
		pepper.name = "pepper";

		System.out.println(taro.name + "  " + taro.age);
		System.out.println(zirou.name + "  " + zirou.age);
		System.out.println(hanako.name + "  " + hanako.age);
		System.out.println(yuki.name + "  " + yuki.age);

		System.out.println();

		zirou.talk();
		hanako.walk();
		taro.run();

		System.out.println();

		aibo.talk();
		asimo.walk();
		pepper.run();
	}

}
