@extends("pages.layouts.app-diputadas")
@section("content")
    <section>
        <div class="container-xl py-80">
            <div class="row">
                <div class="col-12 col-md-5">
                    <figure class="m-0"><img style="border-radius: 20px" src="{{asset($data->diputada->images)}}" alt=""
                                             class="img-fluid">
                    </figure>
                </div>
                <div class="col-12 col-md-7">
                    <h1 class="fs-32 fs-lg-48 mb-24 mb-lg-32 text-diputadas-lila">Dip. {{$data->nombre_field}} </h1>
                    <div class="d-flex flex-column flex-md-row mb-24 mb-lg-32">
                        <div class="icon-text-card d-flex align-items-center morado me-md-24">
                            <div class="icon"><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAAS1BMVEVHcEz////////////////////////////////////////////////////////////////////////////////////////////////ScsZwAAAAGHRSTlMArBci8g8wugX652zdSMZW04R5pDyOmWBWnmP2AAAH2ElEQVR42r1a14KkIBAcEZBkTvX/X3oPjAqIq6hzvO2OSoeiOvH53FqC111fNYZCUtUUU1eSz/9bXBcUu2X6+b8IkbcGR0tWmv14+7py91OmqarGuOagE//d7mJuln1U35W5WH5gvG43r2S/EqFcbF/p2BZiGJcHsl+AIc++WOvy44eG3tqBduLt/bX9clOffJm13wfzV7dnVn1TX3m2lQBA5zcPvgEAedWueQEAGN9DHwWAKsGoNQUg38JBLQGgTfpcXgHNW/ADAFqmcobuyIv6q8jB53XbF1VTVcWky98xcCljZ0rUvQqiQBvnv6c44BRAExgzn2gsFDV6txur0D8SgRkAytefZ67m1JVFhQd1BtA+ESDb+Z+N8hv2iiUcMV6PS5QyPlhLACgfHgDv/cG6XvZloCvRXxkyttPg9nHIaWBB0VmWbaOfHCwBGtdirAHQP3FA5WgqegBAf6jR0Ow4g8v7TigBSAeArAAAMzgm0n2RjY43RAsA0o1DLQBz6yQIA6Bz/i4CF7Ppi0c3SJYKAOrgM/qOALMvurX/5KjvJKdj8G9Z+oZUd0zQ+Jp08BFJvOTY/aEBQB3XVb4lL8cAePFskEGE7wHIkQtWVgDgIIMoH7zDPRNUngGYApC56N4MLTIARcjfjk0K35YXOcBHwAjAsADcrSsdCeDjnJ86EPDSaj3Hcelb2RqIuA97KvbelkIBSE1SjfdO5h8A+7vyVPROGqGewG36SeSeChwAJQkCfPTu/UQfdN4np31ULVwLjTu6ZQoAd8WVaUmT931BAUn2Ek6OwWO/j59jCc9omIYWDiNaLlcbkSo4op/P50Oke/jr1MSEe1v2vvwiZ1+lUNScdwqA5J/Ph5DAhisMSSoIfFQpgC7KkLYBoKZ68vJBpXUlAVnULhd0LghoKgbLGIZnipO1FFC5p3QWUNXZ6l0M1psuLc7XkkN6B3UMiew8EGyVXbuaY7YlQJ9RAJDTsmzfpul7g42yC1dpnRgOGlf61RxMLSa2mU/t8rIaVheNe6XrRC5UgPHwLBY1ljDbAagckCzFwyAXztEujsrEnIC6uUAFyFWShd1Es1nYo/p+Mc0MYHZzghQikJt6jj88u2zI8L296upZnSc2LEIB6P6/DqxWE3lb1a4FUgVQURfQAwtkoQXaHfBTMWBCELIF7NzNWfNNltmNnPWOzFJPgccD07JvB6AQmwcaN+skW+5kI+PkiqtdGVOZcLUloUsXVGjpfrEC0PC1Lpn+UOJOLChXANl2UTZOBnABOQAAitFW6TZ3Eh5iqsWNCdFwPbbsi34SNkaq8tuZVEGrZP4K1bvEYlKioR+/K0CSaCDsxdoyCEOih8w8krKcHgM/GukuHnxZKaMhMTdhLEpLi3s3knAAyjZG6oF/V2knJ3ZMUMzr/wfbKlEeSIpEDFoQjF6duu/WiXFRN4j0+muUOZ5iXmuPSRc12u5PYuWTXwlv4gOUuecotU/jGU0oRG0oGsSdO/kle3+jOtVeMdYdVNgaTr4amGArpRiNP3Xqg+0lYeLRjHtQ8zsEnVcsT7daZLXv1SHKF1n8Xae2rxIz0g04VdBxzK8J0AKQg2cmk7y/tfrgd40NuSLAHDSN+pttMu1/nMf69jEBZulE7W8VSe/MExj1+5RlZHIREaADgMbZcLw9vxoD+pj307idACRD4CoS6JESEmXwqp1euXPZUADbJ/Uoc3zQrd69a+d3zlzWF4DbdnnBwj7C3SkqoSEB59V3MkL2ApR2kiL9+d50i4RcE/h9BWHnspCFzh0BxLBcazDDrpEi74+Rmdr3dr52BmCKsQNQdX21JEu7qXnxcISrATQiPhnZLzqSCJ3SJwNMYaL5PB9jeeD+/kg4crg5NYl9QQyde5PG9HN+kN03D0eXk2wOTUiGeta6LvnBHrl8NrT7AvH+q0VyMv7umqP54v9bhN6dVkXcMNxAUjh1fLBy5cXX65WFfOlKk77B50Fe+mxxJOf1oniBAvyglDYD7150wFIBpbTbuXzvBFgY0iSPMvM6BWk/1b9Q3KuXb9SlXIXQeCMGxKxaiMsAaD9vr+HqZ5l5jwL3hr3ABsUPALBBi/IrnCHLX+xvb8QYch6DX6PgKBv87V1O32YA5q757KIkUQBM7r30hIF1FetCHne9RRW/bn3zSOTNwQXuQ0acDgqGe1dsiTocTebHIfDgjTvHMgOAJguXOjwKNQBUuxca3MNlDkDWBziPHYVBHpB1fa9C7w4AL0oZ1cjevWRH3JRODdWh2BqRHJGYY3Dk8XbmCQRxfDF43LMda/7i6SZxeL+o2f6FT+/Onij+jAA3rvH8PWKw+20IFdnfBDWkX+Nh8s8RA2s8QurPIpBKvsZTn9QixACgg4OJPxsxU3Jh0Z9ldbla+6YtTiun5JGJOB8xcAqAaj5kAJCJp99Ll5g7LZrTbLVPzJOv+EwMqwQFe4qpe6jlNvzLUTw9VbFy+NK5Hdp+0uQxr7zCXE+Y9RXufhBb3ole96NrPBV4PbVP+Wj1YMbwhlmT3PX5AbD0T6rrhKOVftvgWn1/lVwSSettek2n7VcDzJ3A9WqIvRO630wyFqz0n5+s/tI9gvn9QOSe7/mSp2jxwrJaiHb7D72ELqHw0irXOs6p0y+gK34368aq9z2DS+0zwQv6wvbSJsrE6fLQIkKw/wAjXBDNskL6LAAAAABJRU5ErkJggg==">
                            </div>
                            <div><p>Distrito electoral local {{$data->distrito->distrito}} del Estado de México.</p>
                            </div>
                        </div>
                        <div class="icon-text-card d-flex align-items-center naranja">
                            <div class="icon"><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAARVBMVEVHcEz///////////////////////////////////////////////////////////////////////////////////////9X1DS3AAAAFnRSTlMAk8wbU+QF9g3aNzCjim18tO4qRUtiYUYP4QAAA0hJREFUeNrtmtuWqyAMQEXl1ipYrP7/p56DnbEIeA8wMzUv1qYr7IYQQjTLLjklLeeS6Q/3OqcUNx2LDMD7vqdNjfR1ECpJVIDelSo1AE0DQJuyIErqj9EBbp0UT/a+jw6wdH8BfBIAK4XsbkkApCJF2dBxRaZORJ8LwFE9zAOPDtBgSvP6PkSi5LxNugyjS1qAQjTDFIgizfDVuPRplQChfJhL71HGHr+zV7+I/P9fS18oxpR4VaRRfVBo/9PxTwsdDY+YcVDp8Y2M09K45XBB7UkXmiieC/RwfHIAITxqHDbuaJqpiXogU9OvVNR9UIeAdQplUc9E/Yx8DgD2j4+jATy9BDhmLfTtcPt6AfxdgCfudwp+Qo7PHv1ueUB27GR/QGRaB4C6QO42NyBLUAfI0MzAxiBdcMwWoAuOmYJzwVFLYC44agjKBcftALngUBKETIf8HMD5Uh2nBmhPuQCsZ7a34AAvUC6AHwOw93oB/BYAInLqPIHNBYEKwjX7Re5PY3kBA7Bmn+RziTQnEACr9sV8KhcQAKv2NWDjNBkL3YvLIYJw1b6OD0+TszD7XmcAVu3Pudf8/gzAqv1fBXAkCC+Avwow7RrZHaEIAHixTbsLYE8imm9YzwOs2t+Tio8ArNp/bxa4s2ZXLANs0worUjrbvrldVsyc3aXteDuAYf9/pLDK3e7NgoGrbFtBsh3AtJ8p7it4zJKJdttKsh0Ahv2O+ku+l6h89uHLkYPprA1+ny1OUQyAaqlr8u0igC4B9gPQbjmJf00DQLu+9QLMu39sSlWhnn/hNfeP04BhHza8vYi77JJLthyVy4pTyquSxNHZUo67BS9j6GypzWRSh9ctjm/9OoTO8dWQrdGNsRui1utRIXROrOi5wl/Z+o4nL+uE0HkdQMfd4k5N3BA6R/Q+hN63yHw/K4TO+3Di9r69mf3+EDpHrPeDJu8GhdD9PIDkU5A8CJMvw+SJKGvttNmG1VkVOeKennY9vDioakAdR2rxVGT/viakBtb1yJkG0syfMZoQOpsA9ZEFWfM/nKZK59zCvqspeJ1yHIC9xyY2nAoD6GonCZcLVVIAHV/ahia4fRgdXWipZPF1F8AFcAEkB/hg+Qc+kTDs3dCTwwAAAABJRU5ErkJggg==">
                            </div>
                            <div><p>Grupo Parlamentario</p>
                                <p>{{$data->partido->siglas}}</p></div>
                        </div>
                    </div>
                    <div class="fs-16 fs-lg-24">
                        <p>
                            @if($data->diputada)
                                "{{$data->diputada->descripcion}}".
                            @else
                                "{{$data->diputado->descripcion}}".
                            @endif
                        </p>
                    </div>
                    <div class="d-flex"><a href="{{route("diputadasydiputados.show", $data->id)}}"
                                           class="btn gradient rounded-pill py-16 px-60 d-block fw-bold text-white">Ver
                            Perfil Completo</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-diputadas-purpura text-white py-60">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9"><h1 class="fs-24 fs-lg-48 text-center">El Estado de México tardó 140 años
                        para tener una mujer representante popular desde 1814</h1></div>
            </div>
        </div>
    </section>
    <section class="container-xl py-100">
        <div class="border-top border-bottom border-5 border-diputadas-lila py-24 pt-lg-32 pb-lg-24"><h2
                class="fs-32 fs-lg-48 fw-bold text-center text-diputadas-lila">Conoce más diputadas</h2></div>
        <div class="grid-diputadas row gx-32 gy-32 mt-60">
            @foreach($diputadas->sortBy("integrante.diputado.apaterno", SORT_LOCALE_STRING) as $item)
                <div class="col-4 col-md-3 col-lg-2">
                    <a href="{{route("diputadas.show", $item->integrante->id)}}" class="text-center">
                        <figure class="bg-black ratio ratio-1x1 rounded-circle w-100"><img
                                src="{{asset($item->short_images)}}" alt=""></figure>
                        <span class="d-block">
                                {{$item->integrante->nombre_field}}
                           </span>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
