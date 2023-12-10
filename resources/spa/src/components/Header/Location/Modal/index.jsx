import React from 'react';
import {deliveryActions} from "../../../../redux/actions";
import {useDispatch, useSelector} from "react-redux";
import './index.scss';

const LocationModal = (children) => {

    const {id, className, delivery} = children;
    const dispatch = useDispatch();

    // console.log(delivery)

    const selectCity = (cities, city) => {
        dispatch(deliveryActions.setCities(cities));
        dispatch(deliveryActions.setCity(city));
        localStorage.setItem('cities', cities);
        localStorage.setItem('city', city);
        window.instances[0].close();
    };

    const cityKey = useSelector((state) => {
        return state.deliveryReducer.city;
    });

    React.useEffect(() => {
        setTimeout(() => {
            const elems = document.querySelectorAll('.modal');
            window.instances = M.Modal.init(elems, {
                dismissible: false,
            });

            // !localStorage.getItem('cities') && window.instances[0].open();
            // !localStorage.getItem('city') && window.instances[0].open();
        }, 200);
    }, [cityKey]);

    const [cities, setCities] = React.useState([
        {
            name: 'Саки',
            slug: 'saki',
        },
        {
            name: 'Новофедоровка',
            slug: 'novofedorovka',
        },
        {
            name: 'Михайловка',
            slug: 'novofedorovka',
        },
        {
            name: 'Орехово',
            slug: 'vladimirovka',
        },
        {
            name: 'Лесновка',
            slug: 'vladimirovka',
        },
        {
            name: 'Владимировка',
            slug: 'vladimirovka',
        },
        {
            name: 'Гаршино',
            slug: 'vladimirovka',
        },
        {
            name: 'Куликовка',
            slug: 'vladimirovka',
        },
        {
            name: 'Червоное',
            slug: 'vladimirovka',
        },
        {
            name: 'Евпаторийское шоссе',
            slug: 'vladimirovka',
        },
        {
            name: 'Прибрежное',
            slug: 'vladimirovka',
        },
        {
            name: 'Ивановка',
            slug: 'vladimirovka',
        },
        {
            name: 'Шелковичное',
            slug: 'shelkovichnoe',
        },
        {
            name: 'Охотниково (Орлянка)',
            slug: 'shelkovichnoe',
        },
        {
            name: 'Химпоселок',
            slug: 'vladimirovka',
        },
        {
            name: 'Геройское',
            slug: 'shelkovichnoe',
        },
        {
            name: 'Яркое',
            slug: 'other',
        },
        {
            name: 'Крымское',
            slug: 'other',
        },
        {
            name: 'Митяево',
            slug: 'other',
        }
    ]);

    const [filterCities, setFilterCities] = React.useState([
        ...cities
    ]);

    const handleSearch = (e) => {
        setFilterCities([...cities.filter( item => item.name.includes(e.target.value) )]);
    };

    return (
        <div id={id} className={`${className} location-modal`}>
            <div className="header-modal">
                <h4 className="text-heder-modal">Местоположение</h4>
                <a href="#!" className="modal-close waves-effect waves-green btn-flat">
                    <img src="/images/icon-index/close.svg"/>
                </a>
            </div>
            <div className="modal-content">
                <div className="location-search">
                    <img src="/images/icon-index/location-pin.svg" className="mobil-menu-icon-city" alt="Местоположение" />
                    <input
                        type="text" placeholder="Напишите своё местоположение"
                        onChange={handleSearch}
                    />
                </div>
                <div className="location-cities">
                    {
                        filterCities.length > 0 ? (
                            filterCities.map( (item, index) => (
                                <a
                                    href="#!"
                                    onClick={selectCity.bind(null, item.slug, item.name)}
                                    className={`${cityKey === item.name ? 'active' : ''}collection-item`}
                                    key={index}
                                >
                                    {item.name}
                                </a>
                            ))
                        ) : (
                            <a onClick={(e) => e.preventDefault() } >Не найдено</a>
                        )
                    }
                </div>
            </div>
        </div>
    );

};

export default LocationModal;
