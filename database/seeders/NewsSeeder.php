<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('news')
            ->insert($this->generateData());
    }

    protected function generateData(): array
    {
        $data = [];
        $data[] = [
            'title' => 'News 1',
            'source' => 'https://yandex.ru/images/search?pos=21&from=tabbar&img_url=https%3A%2F%2Fsun9-75.userapi.com%2Fc855232%2Fv855232575%2F2141fe%2FS0fg6Wp0vCs.jpg&text=abstract%20art%20free%20small&rpt=simage',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at est dictum, dignissim massa ac, elementum tellus. Sed eget viverra ligula, at congue augue. Curabitur vel nisi eget erat lacinia ornare. Nulla orci dolor, pharetra in fringilla at, elementum quis enim. Praesent iaculis sem sed varius mattis. Maecenas mollis metus ante. Donec pulvinar ipsum vel enim scelerisque, quis porta metus efficitur. Ut consectetur tortor et sodales semper. Donec ac mollis libero. Donec ac tincidunt sem. Cras ante velit, aliquet at dolor sit amet, convallis consequat nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam velit urna, scelerisque ut urna in, tincidunt suscipit enim. Maecenas malesuada quam in mattis hendrerit. Vivamus tempor, lorem a consectetur aliquam, dui neque ornare nunc, eu fermentum justo augue nec neque. Nunc vehicula nulla id turpis venenatis blandit.',
            'category_id' => '1',
        ];
        $data[] = [
            'title' => 'News 2',
            'source' => 'https://yandex.ru/images/search?pos=22&from=tabbar&img_url=https%3A%2F%2Fmodernabstractartgallery.files.wordpress.com%2F2012%2F11%2Fradiant-horizon-30x30.jpg&text=abstract%20art%20free%20small&rpt=simage',
            'text' => 'Cras dictum risus in elit bibendum condimentum. Etiam sodales sapien eget orci hendrerit, non feugiat odio tempus. Aliquam efficitur accumsan mi, id venenatis ante fringilla eget. Aliquam facilisis vehicula eleifend. Sed placerat ligula consectetur, fermentum nunc sed, sodales sapien. Integer porta elit vitae pulvinar elementum. Duis hendrerit ligula at massa facilisis malesuada. Nulla ac nunc tincidunt ex pharetra mattis. Nullam at luctus elit, quis dapibus tortor. Aenean vel nulla volutpat est rhoncus sagittis et nec nibh. Nam eu tincidunt arcu, sit amet pulvinar ipsum. Nam arcu leo, suscipit a lacinia non, luctus ac nulla. Nullam faucibus, lectus non interdum finibus, magna dui vehicula libero, vel molestie nunc risus sed nulla. Aenean viverra pretium urna, eget feugiat tortor malesuada et.',
            'category_id' => '2',
        ];
        $data[] = [
            'title' => 'News 3',
            'source' => 'https://yandex.ru/images/search?pos=32&from=tabbar&img_url=https%3A%2F%2Fi.ytimg.com%2Fvi%2FEj4xjJ-Zi2s%2Fmaxresdefault.jpg&text=abstract%20art%20free%20small&rpt=simage',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in hendrerit mi. Morbi ex quam, placerat nec tincidunt a, interdum et sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin eleifend orci id enim scelerisque rhoncus. Sed molestie libero a pharetra congue. Nam id lacus eu augue tincidunt interdum. Suspendisse vestibulum venenatis ultricies. Morbi sit amet elementum mi, nec fringilla mi. In sagittis arcu non libero pretium, vitae placerat lectus faucibus. Fusce vestibulum blandit imperdiet. Donec vestibulum tincidunt pulvinar. Sed ac posuere eros, a posuere libero. Nunc eget pulvinar ante.',
            'category_id' => '3',
        ];
        $data[] = [
            'title' => 'News 4',
            'source' => 'https://yandex.ru/images/search?pos=40&from=tabbar&img_url=https%3A%2F%2Frampages.us%2Fcrenshawtedu411%2Fwp-content%2Fuploads%2Fsites%2F30383%2F2018%2F08%2Fcropped-watercolor.jpg&text=abstract%20art%20free%20small&rpt=simage',
            'text' => 'Morbi mi felis, consequat quis congue eget, dictum sit amet tortor. Duis non risus aliquet, suscipit lacus at, auctor mi. Vivamus ultricies aliquet ornare. Quisque sed eleifend ante, nec aliquet eros. Aenean ut massa quis dui dapibus scelerisque. Morbi ut lacus ultrices urna porttitor auctor eu ac ipsum. Phasellus auctor at enim in vulputate. Duis ut tristique dui. Phasellus non facilisis leo. Quisque tincidunt ante ac sem vehicula, quis auctor velit scelerisque. In sed ipsum nec ligula dictum fringilla. Curabitur mattis tortor mi, id elementum lectus cursus sit amet. Aenean vel tellus in diam bibendum hendrerit ut ac risus.',
            'category_id' => '1',
        ];
        $data[] = [
            'title' => 'News 5',
            'source' => 'https://yandex.ru/images/search?pos=41&from=tabbar&img_url=https%3A%2F%2Fyt3.ggpht.com%2Fa%2FAATXAJxQBv5f-x8wDSwnMPOa204OCKqoAQTulB3Y9iTbMA%3Ds900-c-k-c0x00ffffff-no-rj&text=abstract%20art%20free%20small&rpt=simage',
            'text' => 'Nunc a tortor feugiat, blandit arcu sed, volutpat nibh. Donec vestibulum consectetur libero, at tristique risus semper a. Suspendisse sed dolor nunc. Aliquam elementum ipsum odio, nec condimentum nulla dictum a. Vestibulum imperdiet odio dolor, in cursus risus elementum non. Cras luctus lacinia lobortis. Praesent fringilla ligula id libero vehicula, vel mollis lacus auctor. Etiam in lorem ex. Cras ante ipsum, ultrices non justo a, dignissim porta libero. Vestibulum orci mi, elementum eget lobortis eu, tempor eget sapien. Sed congue est sit amet auctor imperdiet. Integer ut sem lacus. Sed eu lacus ut sem laoreet dictum non tincidunt erat. Duis vitae lacinia ante. Etiam euismod imperdiet fermentum. Quisque sed turpis consectetur, feugiat nisl at, sodales lectus.',
            'category_id' => '2',
        ];
        return $data;
    }
}
